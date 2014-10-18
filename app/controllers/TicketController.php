<?php
use TicketManager\Entities\Ticket;
use TicketManager\Managers\TicketManager;
use TicketManager\Managers\HistoryManager;
use TicketManager\Managers\DiagnosticManager;
use TicketManager\Managers\SolutionManager;
use TicketManager\Repositories\TicketRepo;
use TicketManager\Repositories\ChargeRepo;
use TicketManager\Repositories\TypeRepo;
use TicketManager\Repositories\ClassRepo;
use TicketManager\Repositories\ChannelRepo;
use TicketManager\Repositories\PriorityRepo;
use TicketManager\Repositories\CategoryRepo;
use TicketManager\Repositories\LocalRepo;
use TicketManager\Repositories\PersonRepo;
use TicketManager\Repositories\ProfileRepo;
use TicketManager\Repositories\HistoryRepo;
use TicketManager\Repositories\DiagnosticRepo;
use TicketManager\Repositories\SolutionRepo;

class TicketController extends BaseController {

    protected $ticketRepo;
    protected $chargeRepo;
    protected $typeRepo;
    protected $classRepo;
    protected $channelRepo;
    protected $priorityRepo;
    protected $categoryRepo;
    protected $localRepo;
    protected $personRepo;
    protected $profileRepo;
    protected $historyRepo;
    protected $diagnosticRepo;
    protected $solutionRepo;

    public function __construct (ticketRepo $ticketRepo,
                                 chargeRepo $chargeRepo,
                                 typeRepo $typeRepo,
                                 classRepo $classRepo,
                                 channelRepo $channelRepo,
                                 priorityRepo $priorityRepo,
                                 categoryRepo $categoryRepo,
                                 personRepo $personRepo,
                                 localRepo $localRepo,
                                 profileRepo $profileRepo,
                                 historyRepo $historyRepo,
                                 diagnosticRepo $diagnosticRepo,
                                 solutionRepo $solutionRepo)
    {
        $this->ticketRepo     = $ticketRepo;
        $this->chargeRepo     = $chargeRepo;
        $this->typeRepo       = $typeRepo;
        $this->classRepo      = $classRepo;
        $this->channelRepo    = $channelRepo;
        $this->priorityRepo   = $priorityRepo;
        $this->categoryRepo   = $categoryRepo;
        $this->localRepo      = $localRepo;
        $this->personRepo     = $personRepo;
        $this->profileRepo    = $profileRepo;
        $this->historyRepo    = $historyRepo;
        $this->diagnosticRepo = $diagnosticRepo;
        $this->solutionRepo  = $solutionRepo;
    }
    public function ListTicket()
    {
//        $Tickets = Ticket::paginate(10);
        $Tickets = Ticket::orderBy('DateTicket', 'desc')->paginate(10);
        //$TM_Class = $this->classRepo->getList();
        //$TM_Ticket = $this->ticketRepo->getList();
        return View::make('ticket/GridList', compact('Tickets'));
    }
    public function RegistrationTicket()
    {
        $user = Auth::user();
        $ticket = $this->ticketRepo->newTicket();

        $TM_Charge = $this->chargeRepo->getListForStore();
        $TM_Type = $this->typeRepo->getList();
        $TM_Class = $this->classRepo->getList();
        $TM_Channel = $this->channelRepo->getList();
        $TM_Priority = $this->priorityRepo->getList();

        return View::make('ticket/FormRegistration', compact('user', 'ticket', 'TM_Charge', 'TM_Type', 'TM_Class','TM_Channel', 'TM_Priority'));
    }

    public function RegisterTicket()
    {
        $ticket = $this->ticketRepo->newTicket();
        $manager = new TicketManager($ticket, Input::all());
        $manager->save();

        return Redirect::route('list_ticket');
    }
    public function ShowTicket($id)
    {
        $Ticket = $this->ticketRepo->find($id);
        return View::make('Ticket/FormShow', compact('Ticket'));
    }
    public function AssignmentTicket($id)
    {
        $Ticket = $this->ticketRepo->find($id);
        $Responsible = $this->ticketRepo->findResponsible($id);
        return View::make('ticket/FormAssignment', compact('Ticket', 'Responsible'));
    }
    public function AssignTicket()
    {
        $History = $this->historyRepo->newHistory();
        $manager = new HistoryManager($History, Input::all());
        $manager->save();
        Ticket::where('id', Input::get('Ticket_Id'))->update(array('State_Id' => 2,'User_Id' => Input::get('User_Id')));

        return Redirect::route('list_ticket');
    }

    public function FastTicket()
    {
        return View::make('ticket/FormFast', compact('ticket'));
    }
    public function QuickTicket()
    {
        return Redirect::route('list_ticket');
    }
    public function DiagnosticTicket($id)
    {
        $Ticket = $this->ticketRepo->find($id);
        $TM_Class = $this->classRepo->getList();
        return View::make('ticket/FormDiagnostic', compact('Ticket', 'TM_Class'));
    }
    public function DiagnoseTicket()
    {

        $Diagnostic = $this->diagnosticRepo->newDiagnostic();
        $manager = new DiagnosticManager($Diagnostic, Input::all());
        $manager->save();
        Ticket::where('id', Input::get('Ticket_Id'))->update(array('State_Id' => 3,'User_Id' => Input::get('User_Id')));
        return Redirect::route('list_ticket');
    }
    public function SolutionTicket($id)
    {
        $Ticket = $this->ticketRepo->find($id);
        return View::make('ticket/FormSolution', compact('Ticket'));
    }
    public function SolveTicket()
    {
        $Solution = $this->solutionRepo->newSolution();
        $manager = new SolutionManager($Solution, Input::all());
        $manager->save();
        Ticket::where('id', Input::get('Ticket_Id'))->update(array('State_Id' => 4,'User_Id' => Input::get('User_Id')));
        return Redirect::route('list_ticket');
    }
    public function ReassignmentTicket()
    {
        return View::make('ticket/FormReassignment', compact('ticket'));
    }
    public function ReallocateTicket()
    {
        return Redirect::route('list_ticket');
    }
    public function RefusalTicket()
    {
        return View::make('ticket/FormRefusal', compact('ticket'));
    }
    public function RejectTicket()
    {
        return Redirect::route('list_ticket');
    }
    public function TrackingTicket()
    {
        return View::make('ticket/FormTracking', compact('ticket'));
    }
    public function FollowTicket()
    {
        return Redirect::route('list_ticket');
    }
    public function confirmTicket()
    {
        return View::make('ticket/FormConfirm');
    }
    public function recategorisationTicket()
    {
        return View::make('ticket/FormReclassify', compact('ticket'));
    }
    public function reclassifyTicket()
    {
        return Redirect::route('list_ticket');
    }


    //for autocomplete and dropdown with ajax & jquery
    public function getLocal()
    {
        $Local =  Input::get('term');
        $data = $this->localRepo->getLocal($Local);
        $result = [];

        foreach($data as $id => $Description){
            if(strpos(Str::lower($Description), $Local) !== false){
                $result[]=['value'=>$Description, 'id' =>$id];
            }
        }
        return Response::json($result);
    }

    public function getPerson()
    {
        $Person = Input::get('term');
        $data = $this->personRepo->getPerson($Person);
        $result = [];
        foreach($data as $id => $search){
            if(strpos(Str::lower($search), $Person) !== false){
                $result[]=['value'=>$search, 'id' =>$id];
            }
        }
        return Response::json($result);
    }

    public function getCategory()
    {
        $Class = Input::get('term');
        $result = $this->categoryRepo->getCategory($Class);
        return Response::json($result);
    }
    public function getSubCategory()
    {
        $Category = Input::get('term');
        $result = $this->categoryRepo->getSubCategory($Category);
        return Response::json($result);
    }
    public function getSpecify()
    {
        $SubCategory = Input::get('term');
        $result = $this->categoryRepo->getSpecify($SubCategory);
        return Response::json($result);
    }
}
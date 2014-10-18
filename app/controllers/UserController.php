<?php
use TicketManager\Entities\User;
use TicketManager\Repositories\GroupRepo;
use TicketManager\Repositories\AreaRepo;
use TicketManager\Repositories\ChargeRepo;
use TicketManager\Repositories\ProfileRepo;
use TicketManager\Managers\RegisterManager;
use TicketManager\Managers\AccountManager;
use TicketManager\Managers\ProfileManager;

class UserController extends BaseController {

    protected $GroupRepo;
    protected $AreaRepo;
    protected $ChargeRepo;
    protected $ProfileRepo;

    public function __construct(
        GroupRepo       $GroupRepo,
        AreaRepo        $AreaRepo,
        ChargeRepo      $ChargeRepo,
        ProfileRepo     $profileRepo)
    {
        $this->GroupRepo     = $GroupRepo;
        $this->AreaRepo      = $AreaRepo;
        $this->ChargeRepo    = $ChargeRepo;
        $this->ProfileRepo   = $profileRepo;
    }

    public function signUp()
    {
        //validar si el usuario esta inactivo =>enviar error notificando
        return View::make('user/sign-up');
    }
    public function register()
    {
        $user = $this->ProfileRepo->newProfile();
        $manager = new RegisterManager($user, Input::all());
        $manager->save();

        return Redirect::route('home');
    }
    public function account()
    {
        $user = Auth::user();
        return View::make('user/account', compact('user'));
    }
    public function UpdateAccount()
    {
        $user = Auth::user();
        $manager = new AccountManager($user, Input::all());
        $manager->save();

        return Redirect::route('account');
    }
    public function profile()
    {
        $user = Auth::user();
        $profile = $user->getProfile();
        $TM_Area     = $this->AreaRepo->getList();
        $TM_Group    = $this->GroupRepo->getList();
        $TM_Charge   = $this->ChargeRepo->getListForUser();

        return View::make('user/profile', compact('user', 'profile', 'TM_Area', 'TM_Group', 'TM_Charge'));
    }
    public function UpdateProfile()
    {
        $user = Auth::user();
        $profile = $user->getProfile();
        $manager = new ProfileManager($profile, Input::all());
        $manager->save();

        return Redirect::route('profile');
    }

    public function ListUsers()
    {
        $Users = User::paginate(10);
        return View::make('manager/user/GridList', compact('Users'));
    }
}
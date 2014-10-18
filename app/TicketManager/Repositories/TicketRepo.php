<?php

namespace TicketManager\Repositories;

use TicketManager\Entities\Ticket;
use TicketManager\Entities\User;

class TicketRepo extends BaseRepo {

    public function getModel()
    {
        return new Ticket;
    }

    public function getList()
    {
        $Ticket = Ticket::where('Status', '1')
        ->orderBy('DateTicket', 'asc')->get();
        return $Ticket;
    }

    public function findClass($id)
    {
        return Ticket::where('id', $id)->pluck('Class_Id');
    }

    public function findResponsible($id)
    {
        $Class = Ticket::where('id', $id)->pluck('Class_Id');
        $Responsible = User::where('Status', true)->where('Class_Id', $Class)->lists('FullName', 'id');
        $Responsible[''] = 'Seleccione un Responsable';
        return $Responsible;
    }

    public function newTicket()
    {
        $Ticket = new Ticket();

        //$Ticlet->IsFast if is checked true

        //$Ticket->attached
        //$Ticket->Date

        $Ticket->State_Id = 1;
        $Ticket->User_Id = \Auth::user()->id;
        $Ticket->Status = true;
        $Ticket->BusinessUnit_Id = '1';

        $Ticket->LastUser = \Auth::user()->username;
        $Ticket->RegisterBy = \Auth::user()->username;
        return $Ticket;
    }
} 
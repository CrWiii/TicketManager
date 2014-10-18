<?php

namespace TicketManager\Repositories;

use TicketManager\Entities\Attention;

class SolveRepo extends BaseRepo {

    public function getModel()
    {
        return new Attention;
    }

    public function newDiagnose()
    {
        $Attention = new Attention();

        //$History->Ticket_Id = $id;
        //$History->attached;
        $Attention->Status = true;
        $Attention->LastUser = \Auth::user()->username;
        $Attention->RegisterBy = \Auth::user()->username;
        return $Attention;
    }
} 
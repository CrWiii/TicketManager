<?php

namespace TicketManager\Repositories;

use TicketManager\Entities\History;

class HistoryRepo extends BaseRepo {

    public function getModel()
    {
        return new History;
    }

    public function newHistory()
    {
        $History = new History();

        //$History->Ticket_Id = $id;
        //$History->attached;
        $History->Status = true;
        $History->LastUser = \Auth::user()->username;
        $History->RegisterBy = \Auth::user()->username;
        return $History;
    }
} 
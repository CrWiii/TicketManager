<?php

namespace TicketManager\Repositories;

use TicketManager\Entities\Solution;

class SolutionRepo extends BaseRepo {

    public function getModel()
    {
        return new Solution;
    }

    public function newSolution()
    {
        $Solution = new Solution();

        $Solution->Status = true;
        $Solution->LastUser = \Auth::user()->username;
        $Solution->RegisterBy = \Auth::user()->username;
        return $Solution;
    }
} 
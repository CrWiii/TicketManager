<?php

namespace TicketManager\Repositories;

use TicketManager\Entities\Diagnostic;

class DiagnosticRepo extends BaseRepo {

    public function getModel()
    {
        return new Diagnostic;
    }

    public function newDiagnostic()
    {
        $Diagnostic = new Diagnostic();

        $Diagnostic->Status = true;
        $Diagnostic->LastUser = \Auth::user()->username;
        $Diagnostic->RegisterBy = \Auth::user()->username;
        return $Diagnostic;
    }
} 
<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\State;

class StateRepo extends BaseRepo {

    public function getModel()
    {
        return new State;
    }

    public function getList()
    {
        $State = State::where('Status', true)->lists('Description', 'id');
        $State[''] = 'Seleccione Estado';
        return $State;
    }

}
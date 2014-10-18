<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Priority;

class PriorityRepo extends BaseRepo {

    public function getModel()
    {
        return new Priority;
    }

    public function getList()
    {
        return Priority::where('Status', true)->lists('Description', 'id');
    }

} 
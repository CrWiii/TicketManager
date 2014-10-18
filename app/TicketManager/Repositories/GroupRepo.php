<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Group;

class GroupRepo extends BaseRepo {

    public function getModel()
    {
        return new Group;
    }

    public function getList()
    {
        return Group::where('Status', true)->lists('Description', 'id');
    }

}
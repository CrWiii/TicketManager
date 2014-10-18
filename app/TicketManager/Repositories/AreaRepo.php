<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Area;

class AreaRepo extends BaseRepo {

    public function getModel()
    {
        return new Area;
    }

    public function getList()
    {
        return Area::where('Status', true)->lists('Description', 'id');
    }
}
<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Type;

class TypeRepo extends BaseRepo {

    public function getModel()
    {
        return new Type;
    }

    public function getList()
    {
        return Type::where('Status', true)->lists('Description', 'id');
    }

} 
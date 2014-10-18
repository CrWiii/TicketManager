<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Local;

class LocalRepo extends BaseRepo {

    public function getModel()
    {
        return new Local;
    }

    public function getList()
    {
        return Local::where('Status', true)->lists('Description', 'id');
    }
    public function getLocal($Local)
    {
        return  Local::where('Description', 'LIKE', '%' . $Local . '%')
            ->where('Status', true)
            ->lists('Description', 'id','created_at');
    }
}
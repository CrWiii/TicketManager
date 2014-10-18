<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Charge;

class ChargeRepo extends BaseRepo {

    public function getModel()
    {
        return new Charge;
    }

    public function getList()
    {
        return Charge::where('Status', true)->lists('Description', 'id');
    }
    public function getListForUser()
    {
        return Charge::where('Status', true)->where('Type','LIKE','USER')->lists('Description', 'id');
    }
    public function getListForStore()
    {
        return Charge::where('Status', true)->where('Type','LIKE','TIENDA')->lists('Description', 'id');
    }

} 
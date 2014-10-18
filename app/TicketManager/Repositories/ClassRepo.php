<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Clas;

class ClassRepo extends BaseRepo {

    public function getModel()
    {
        return new Clas;
    }

    public function getList()
    {
        $Clas = Clas::where('Status', true)->lists('Description', 'id');
        $Clas[''] = 'Seleccione Clase';
        return $Clas;
    }

} 
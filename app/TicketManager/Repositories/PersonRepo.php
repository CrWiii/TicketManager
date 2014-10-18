<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Person;

class PersonRepo extends BaseRepo {

    public function getModel()
    {
        return new Person;
    }

    public function getList()
    {
        return Person::where('Status', true)->lists('Description', 'id');
    }

    public function getPerson($Person)
    {
        return  Person::where('search', 'LIKE', '%' . $Person . '%')
            ->take(1000)
            ->where('Status', true)
            ->lists('search','Person');
    }
}
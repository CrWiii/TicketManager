<?php

namespace TicketManager\Entities;

class Person extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Person';


    public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Ticket');
    }

}

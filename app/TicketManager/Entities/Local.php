<?php

namespace TicketManager\Entities;

class Local extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Local';


    /*public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Ticket');
    }*/
    public function Tickets()
    {
        return $this->hasMany('TicketManager\Entities\Ticket');
    }

}

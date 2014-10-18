<?php

namespace TicketManager\Entities;

class State extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_State';

    public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Ticket');
    }
}
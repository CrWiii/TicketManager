<?php

namespace TicketManager\Entities;

class BusinessUnit extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_BusinessUnit';

    public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Ticket');
    }
}
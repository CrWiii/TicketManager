<?php

namespace TicketManager\Entities;

class Type extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Type';


    public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Ticket');
    }

}

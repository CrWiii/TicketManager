<?php

namespace TicketManager\Entities;

class Channel extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Channel';


    public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Ticket');
    }

}

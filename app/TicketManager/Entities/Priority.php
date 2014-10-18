<?php
namespace TicketManager\Entities;

class Priority extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Priority';

    public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Ticket');
    }


} 
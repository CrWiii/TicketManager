<?php

namespace TicketManager\Entities;

class Clas extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Class';


    public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Class');
    }


}

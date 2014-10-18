<?php

namespace TicketManager\Entities;

class Sector extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Sector';


    public function Local()
    {
        return $this->belongsTo('TicketManager\Entities\Local');
    }

}

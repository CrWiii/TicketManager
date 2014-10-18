<?php

namespace TicketManager\Entities;

class Zone extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Zone';


    public function Local()
    {
        return $this->belongsTo('TicketManager\Entities\Local');
    }

}

<?php

namespace TicketManager\Entities;

class Company extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Company';


    public function Local()
    {
        return $this->belongsTo('TicketManager\Entities\Local');
    }

}

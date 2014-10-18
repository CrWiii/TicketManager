<?php

namespace TicketManager\Entities;

class Mark extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Mark';


    public function Local()
    {
        return $this->belongsTo('TicketManager\Entities\Local');
    }

}

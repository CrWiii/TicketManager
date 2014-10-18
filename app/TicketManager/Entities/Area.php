<?php

namespace TicketManager\Entities;

class Area extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Area';

    public function Group()
    {
        return $this->belongsTo('TicketManager\Entities\Group');
    }

    public function profile()
    {
        return $this->hasMany('TicketManager\Entities\Profile');
    }


} 
<?php
namespace TicketManager\Entities;

class Charge extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Charge';

    public function Group()
    {
        return $this->hasOne('TicketManager\Entities\Group', 'Id', 'Group_Id');
    }


    public function profile()
    {
        return $this->belongsTo('TicketManager\Entities\profile');
    }

} 
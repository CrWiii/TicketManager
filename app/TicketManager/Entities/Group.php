<?php
namespace TicketManager\Entities;

class Group extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Group';

    public function Area()
    {
        return $this->hasOne('TicketManager\Entities\Area','Area_Id','id');
    }

    public function Charge()
    {
        return $this->belongsTo('TicketManager\Entities\Charge');
    }

    public function profile()
    {
        return $this->belongsTo('TicketManager\Entities\profile');
    }



} 
<?php
namespace TicketManager\Entities;

class Profile extends \Eloquent {

    protected $fillable =  ['description','User_Id','Charge_Id','Area_Id','Group_Id','available'];

    protected $table = 'TM_Profile';

    //public $incrementing = false;
    //public $autoincrement = false;

    public function user()
    {
        return $this->hasOne('TicketManager\Entities\User', 'User_id', 'id');
    }

    public function Area()
    {
        return $this->hasOne('TicketManager\Entities\Area', 'Area_id', 'id');
    }
    public function Group()
    {
        return $this->hasOne('TicketManager\Entities\Group', 'Group_id', 'id');
    }

    public function Charge()
    {
        return $this->hasOne('TicketManager\Entities\Charge', 'Charge_id','id');
    }

}
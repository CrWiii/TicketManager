<?php

namespace TicketManager\Entities;

class Ticket extends \Eloquent {

    protected $fillable = [
        'Local_Id',
        'Person_Id',
        'Charge_Id',
        'User_Id',
        'BusinessUnit_Id',
        'Class_Id',
        'Type_Id',
        'Category_Id',
        'SubCategory_Id',
        'Specify_Id',
        'Channel_Id',
        'Priority_Id',
        'State_Id',
        'Active_Id',
        'Active',
        'Description',
        'RejectionReason',
        'Status',
        'attached',
        'IsFast',
        'Date',
        'DateTicket',
        'RegisterBy',
        'LastUser'
    ];
    protected $table = 'TM_Ticket';

    /*public function Local()
    {
        $this->hasOne('TicketManager\Entities\Local', 'Local_id', 'id');
    }*/
    public function applicants()
    {
        return $this->belongsTo('TicketManager\Entities\Local','Local_Id');
    }

    public function Responsible()
    {
        return $this->belongsTo('TicketManager\Entities\User','User_Id');
    }
    /*public function History()
    {
        return $this->hasMany('TicketManager\Entities\History');
    }*/
    public function States()
    {
        return $this->belongsTo('TicketManager\Entities\State','State_Id');
    }
    public function Categories()
    {
        return $this->belongsTo('TicketManager\Entities\Category','Category_Id');
    }
    public function SubCategories()
    {
        return $this->belongsTo('TicketManager\Entities\Category','SubCategory_Id');
    }
    public function Specifies()
    {
        return $this->belongsTo('TicketManager\Entities\Category','Specify_Id');
    }
    public function Priorities()
    {
        return $this->belongsTo('TicketManager\Entities\Priority','Priority_Id');
    }
    public function Channels()
    {
        return $this->belongsTo('TicketManager\Entities\Channel','Channel_Id');
    }
    public function Persons()
    {
        return $this->belongsTo('TicketManager\Entities\Person','Person_Id','Person');
    }
    public function Charges()
    {
        return $this->belongsTo('TicketManager\Entities\Charge','Charge_Id');
    }

    public function Types()
    {
        return $this->belongsTo('TicketManager\Entities\Type','Type_Id');
    }

    public function Classes()
    {
        return $this->belongsTo('TicketManager\Entities\Clas','Class_Id');
    }


    public function Person()
    {
        $this->hasOne('TicketManager\Entities\Person', 'Person_id', 'id');
    }
    public function type()
    {
        $this->hasOne('TicketManager\Entities\Type', 'type_id', 'id');
    }
    public function Clas()
    {
        $this->hasOne('TicketManager\Entities\Class', 'Class_id', 'id');
    }
    public function Channel()
    {
        $this->hasOne('TicketManager\Entities\Channel', 'Channel_id', 'id');
    }
    public function Category()
    {
        $this->hasOne('TicketManager\Entities\Category', 'Category_id', 'id');
    }

}
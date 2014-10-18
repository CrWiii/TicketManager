<?php

namespace TicketManager\Entities;

class History extends \Eloquent {

    protected $fillable = [
        'Ticket_Id',
        'User_Id',
        'Indications',
        'deadline',
        'attached',
        'Status',
        'RegisterBy',
        'LastUser'
    ];

    protected $table = 'TM_History';

    public function Ticket()
    {
        $this->hasOne('TicketManager\Entities\Ticket', 'Ticket_Id', 'id');
    }
    public function Responsible()
    {
        return $this->belongsTo('TicketManager\Entities\User','User_Id');
    }


} 
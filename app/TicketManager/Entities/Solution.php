<?php

namespace TicketManager\Entities;

class Solution extends \Eloquent {

    protected $fillable = [
        'Ticket_Id',
        'User_Id',
        'Status',
        'solve',
        'solveDate_',
        'solveDate',
        'recommendations',
        'RegisterBy',
        'LastUser'
    ];

    protected $table = 'TM_Solution';

    public function Ticket()
    {
        $this->hasOne('TicketManager\Entities\Ticket', 'Ticket_Id', 'id');
    }

    public function Responsible()
    {
        return $this->belongsTo('TicketManager\Entities\User','User_Id');
    }


} 
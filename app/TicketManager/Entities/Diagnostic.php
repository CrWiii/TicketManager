<?php

namespace TicketManager\Entities;

class Diagnostic extends \Eloquent {

    protected $fillable = [
        'Ticket_Id',
        'Class_Id',
        'Category_Id',
        'SubCategory_Id',
        'Specify_Id',
        'User_Id',
        'Status',
        'Diagnose',
        //'DiagnoseDate_',
        'DiagnoseDate',
        'possibleSolve',
        'possibleSolveDate_',
        'possibleSolveDate',
        'RegisterBy',
        'LastUser'
    ];

    protected $table = 'TM_Diagnostic';

    public function Ticket()
    {
        $this->hasOne('TicketManager\Entities\Ticket', 'Ticket_Id', 'id');
    }

    public function Responsible()
    {
        return $this->belongsTo('TicketManager\Entities\User','User_Id');
    }


} 
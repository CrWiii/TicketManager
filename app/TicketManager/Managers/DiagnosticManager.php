<?php namespace TicketManager\Managers;


class DiagnosticManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'Ticket_Id'             => '',
            'Class_Id'              => '',
            'Category_Id'           => '',
            'SubCategory_Id'        => '',
            'Specify_Id'            => '',
            'User_Id'               => '',
            'Status'                => '',
            'Diagnose'              => '',
            'DiagnoseDate_'         => '',
            'DiagnoseDate'          => '',
            'possibleSolve'         => '',
            'possibleSolveDate_'    => '',
            'possibleSolveDate'     => '',
            'RegisterBy'            => '',
            'LastUser'              => ''

        ];

        return $rules;
    }

    /*
    public function prepareData($data)
    {
        $data['FullName'] = strip_tags(($data['FullName']));
    }
    */
}
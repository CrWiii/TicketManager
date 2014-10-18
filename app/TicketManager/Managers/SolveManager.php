<?php namespace TicketManager\Managers;


class DiagnoseManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'Ticket_Id'         => '',
            'Class_Id'          => '',
            'Type_Id'           => '',
            'Category_Id'       => '',
            'SubCategory_Id'    => '',
            'User_Id'           => '',
            'Status'            => '',
            'Diagnose'          => '',
            'DiagnoseDate'      => '',
            'possibleSolve'     => '',
            'possibleSolveDate' => '',
            'recommendations'   => '',
            'solve'             => '',
            'solveDate'         => '',
            'RegisterBy'        => '',
            'LastUser'          => ''
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
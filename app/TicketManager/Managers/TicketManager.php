<?php namespace TicketManager\Managers;


class TicketManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'Local_Id'          => 'required|exists:TM_Local,id',
            'Person_Id'         => 'required|exists:TM_Person,Person',
            'Charge_Id'         => '',
            'User_Id'           => '',
            'BusinessUnit_Id'   => '',
            'Class_Id'          => 'required|exists:TM_Class,id',
            'Type_Id'           => 'required|exists:TM_Type,id',
            'Category_Id'       => 'required|exists:TM_Category,id',
            'SubCategory_Id'    => 'required|exists:TM_Category,id',
            'Specify_Id'        => '',
            'Channel_Id'        => '',
            'Priority_Id'       => '',
            'State_Id'          => '',
            'Active'            => 'Integer',
            'Description'       => 'required|max:250',
            'RejectionReason'   => '',
            'Status'            => '',
            'attached'          => '',
            'IsFast'            => '',
            'Date'              => '',
            'DateTicket'        => 'required',

            /*
            'username'  => 'required|unique:TM_User,username,' . $this->entity->id,
            'FullName'  => 'required',
            'email'     => 'required|email|unique:TM_User,email,' . $this->entity->id,
            'password'  => 'confirmed',
            'password_confirmation' => ''*/
        ];

        return $rules;
    }

    public function prepareData($data)
    {
        $data['FullName'] = strip_tags(($data['FullName']));
    }
}
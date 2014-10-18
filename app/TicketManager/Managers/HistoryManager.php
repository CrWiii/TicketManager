<?php namespace TicketManager\Managers;


class HistoryManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'Ticket_Id'         => 'required',
            'User_Id'           => 'required',//'required|exists:TM_User,id',
            'Indications'       => 'max:250',
            'deadline'          => '',
            'attached'          => '',
            'Status'            => '',
            'RegisterBy'        => '',
            'LastUser'          => '',



            /*
            'username'  => 'required|unique:TM_User,username,' . $this->entity->id,
            'FullName'  => 'required',
            'email'     => 'required|email|unique:TM_User,email,' . $this->entity->id,
            'password'  => 'confirmed',
            'password_confirmation' => ''*/
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
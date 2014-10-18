<?php namespace TicketManager\Managers;


class AccountManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'username'  => 'required|unique:TM_User,username,' . $this->entity->id,
            'FullName'  => 'required',
            'email'     => 'required|email|unique:TM_User,email,' . $this->entity->id,
            'password'  => 'confirmed',
            'password_confirmation' => ''

        ];
        return $rules;
    }
    public function prepareData($data)
    {
        $data['FullName'] = strip_tags(($data['FullName']));
    }
} 
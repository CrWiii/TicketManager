<?php namespace TicketManager\Managers;

class RegisterManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'username'  => 'required|unique:TM_user,username',
            'FullName'  => 'required',
            'email'     => 'required|email|unique:TM_user,email',
            'password'  => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        return $rules;
    }
} 
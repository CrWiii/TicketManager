<?php

class AuthController extends BaseController {

    public function login()
    {
       $data = Input::only('username', 'password', 'remember');

        $credentials = ['username' => $data['username'], 'password' => $data['password']];

        if (Auth::attempt($credentials, $data['remember']))
        {
            return Redirect::to('dashboard');
        }
        return Redirect::back()->with('login_error', 1);
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
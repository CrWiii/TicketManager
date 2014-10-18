<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Profile;
use TicketManager\Entities\User;

class ProfileRepo extends BaseRepo {

    public function getModel()
    {

        return new Profile;

    }

    public function newProfile()
    {
        $user = new user();
        $user->type = 'USER';

        if(! \Auth::check())
        {
            $user->LastUser = 'GHEST';
            $user->RegisterBy = 'GHEST';

        }
        else
        {
            $user->LastUser = Auth::user()->username;
            $user->RegisterBy =Auth::user()->username;
        }

        return $user;
    }

    public function getList()
    {
        return User::where('Status', true)->where('Class_Id', 1)->lists('FullName', 'id');
    }

} 
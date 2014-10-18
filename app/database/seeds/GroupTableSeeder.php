<?php

use TicketManager\Entities\Group;

class GroupTableSeeder extends Seeder {

    public function run()
    {
        Group::create([
            'Description' => 'HELPDESK',
            'Area_Id' => '1',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Group::create([
            'Description' => 'SOPORTE',
            'Area_Id' => '1',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Group::create([
            'Description' => 'DESARROLLO',
            'Area_Id' => '1',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Group::create([
            'Description' => 'PROCEDIMIENTOS',
            'Area_Id' => '1',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Group::create([
            'Description' => 'TIENDA',
            'Area_Id' => '2',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);


    }

} 
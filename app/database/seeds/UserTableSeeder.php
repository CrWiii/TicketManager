<?php

use TicketManager\Entities\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'username' => 'ROOT',
            'FullName' => 'SUPER ADMIN',
            'email' => 'adminTicketManager@gmail.com',
            'password' => 'root',
            'type'=> 'ADMIN',
            'Status' => true,
            'LastUser' => 'ROOT',
            'RegisterBy' => 'ROOT',
        ]);
        User::create([
            'username' => 'CSEVILLA',
            'FullName' => 'CRISTHIAN SEVILLA',
            'email' => 'cgjsl89@gmail.com',
            'password' => '123456',
            'type'=> 'ADMIN',
            'Class_Id' => '1',
            'Status' => true,
            'LastUser' => 'ROOT',
            'RegisterBy' => 'ROOT',
        ]);
        User::create([
            'username' => 'LCHAVEZ',
            'FullName' => 'LUCHITO CHAVEZ',
            'email' => 'lchevez@rokys.pe',
            'password' => '123456',
            'type'=> 'ADMIN',
            'Class_Id' => '2',
            'Status' => true,
            'LastUser' => 'ROOT',
            'RegisterBy' => 'ROOT',
        ]);
        User::create([
            'username' => 'JPEREZ',
            'FullName' => 'JUAN PEREZ',
            'email' => 'jperez@rokys.pe',
            'password' => '123456',
            'type' => 'USER',
            'Class_Id' => '1',
            'Status' => true,
            'LastUser' => 'ROOT',
            'RegisterBy' => 'ROOT',
        ]);
        User::create([
            'username' => 'PLIMA',
            'FullName' => 'PEPITO LIMA',
            'email' => 'plima@rokys.pe',
            'password' => '123456',
            'type' => 'USER',
            'Class_Id' => '2',
            'Status' => true,
            'LastUser' => 'ROOT',
            'RegisterBy' => 'ROOT',
        ]);
    }
}
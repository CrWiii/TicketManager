<?php

use TicketManager\Entities\Charge;

class ChargeTableSeeder extends Seeder {

    public function run()
    {
        Charge::create([
            'Description' => 'ASISTENTE HELPESK',
            'Group_Id' => '1',
            'Type' => 'USER',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'JEFE HELPDESK',
            'Group_Id' => '1',
            'Type' => 'USER',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'TECNICO SOPORTE',
            'Group_Id' => '2',
            'Type' => 'USER',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'JEFE SOPORTE',
            'Group_Id' => '2',
            'Type' => 'USER',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'DEVELOPER',
            'Group_Id' => '3',
            'Type' => 'USER',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'JEFE DEVELOPER',
            'Group_Id' => '3',
            'Type' => 'USER',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'ANALISTA',
            'Group_Id' => '4',
            'Type' => 'USER',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'ADMINISTRADOR',
            'Group_Id' => '5',
            'Type' => 'TIENDA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'ASISTENTE',
            'Group_Id' => '5',
            'Type' => 'TIENDA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'CONTROLADOR',
            'Group_Id' => '5',
            'Type' => 'TIENDA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'SUPERVISOR',
            'Group_Id' => '5',
            'Type' => 'TIENDA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Charge::create([
            'Description' => 'AUDITOR',
            'Group_Id' => '5',
            'Type' => 'TIENDA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }

} 
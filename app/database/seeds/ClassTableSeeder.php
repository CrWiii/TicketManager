<?php
use TicketManager\Entities\Clas;

class ClassTableSeeder extends Seeder {

    public function run()
    {
        Clas::create([
            'Description' => 'INFRAESTRUCTURA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Clas::create([
            'Description' => 'SISTEMAS',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Clas::create([
            'Description' => 'PROCESOS',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
<?php
use TicketManager\Entities\Zone;

class ZoneTableSeeder extends Seeder {

    public function run()
    {
        Zone::create([
            'Description' => 'PROVINCIAS',
            'Status' => false,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Zone::create([
            'Description' => 'LIMA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Zone::create([
            'Description' => 'TRUJILLO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Zone::create([
            'Description' => 'CHICLAYO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Zone::create([
            'Description' => 'PIURA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Zone::create([
            'Description' => 'PIURA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Zone::create([
            'Description' => 'NAZCA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
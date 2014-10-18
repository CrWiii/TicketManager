<?php

use TicketManager\Entities\Local;

class LocalTableSeeder extends Seeder {

    public function run()
    {
        Local::create([
            'Description' => 'Santa Anita',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Local::create([
            'Description' => 'Santa Anita 02',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Local::create([
            'Description' => 'La Molina',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Local::create([
            'Description' => 'Independencia',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Local::create([
            'Description' => 'Lince 01',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Local::create([
            'Description' => 'Lince 02',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Local::create([
            'Description' => 'San Borja',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);

    }

} 
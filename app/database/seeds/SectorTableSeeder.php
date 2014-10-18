<?php
use TicketManager\Entities\Sector;

class SectorTableSeeder extends Seeder {

    public function run()
    {
        Sector::create([
            'Description' => 'ROKYS - A1',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'ROKYS - A2',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'ROKYS - B1',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'ROKYS - B2',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'ROKYS - Especial',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'SOPRANOS - A',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'SOPRANOS - B',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'SOPRANOS - C',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'RODIZIO - Todos',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'SCENCIA - Todos',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => '[NINGUNO]',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'ROKYS - A3',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Sector::create([
            'Description' => 'ROKYS - C1',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
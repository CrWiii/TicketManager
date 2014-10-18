<?php
use TicketManager\Entities\Area;

class AreaTableSeeder extends Seeder {

    public function run()
    {

        Area::create([
            'Description' => 'SISTEMAS',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Area::create([
            'Description' => 'TIENDA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
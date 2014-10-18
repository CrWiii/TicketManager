<?php
use TicketManager\Entities\Priority;

class PriorityTableSeeder extends Seeder {

    public function run()
    {
        Priority::create([
            'Description' => 'BAJA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Priority::create([
            'Description' => 'MEDIA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Priority::create([
            'Description' => 'ALTA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
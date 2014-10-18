<?php
use TicketManager\Entities\Mark;

class MarkTableSeeder extends Seeder {

    public function run()
    {
        Mark::create([
            'Description' => 'ROKYS',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Mark::create([
            'Description' => 'SOPRANOS',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Mark::create([
            'Description' => 'RODIZIO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Mark::create([
            'Description' => 'SCENCIA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
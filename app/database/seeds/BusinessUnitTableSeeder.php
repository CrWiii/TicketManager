<?php
use TicketManager\Entities\BusinessUnit;

class BusinessUnitTableSeeder extends Seeder {

    public function run()
    {
        BusinessUnit::create([
            'Description' => 'GRUPO ROKYS',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
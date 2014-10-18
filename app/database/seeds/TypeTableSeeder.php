<?php
use TicketManager\Entities\Type;

class TypeTableSeeder extends Seeder {

    public function run()
    {
        Type::create([
            'Description' => 'INCIDENCIA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Type::create([
            'Description' => 'MEJORA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Type::create([
            'Description' => 'PROYECTO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
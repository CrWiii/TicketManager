<?php
use TicketManager\Entities\State;

class StateTableSeeder extends Seeder {

    public function run()
    {
        State::create([
            'Description' => 'REGISTRADO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        State::create([
            'Description' => 'ASIGNADO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        State::create([
            'Description' => 'DIAGNOSTICADO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        State::create([
            'Description' => 'SOLUCIONADO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        State::create([
            'Description' => 'RECHAZADO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);

    }
} 
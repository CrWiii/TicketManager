<?php
use TicketManager\Entities\Channel;

class ChannelTableSeeder extends Seeder {

    public function run()
    {
        Channel::create([
            'Description' => 'CELULAR',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Channel::create([
        'Description' => 'CORREO',
        'Status' => true,
        'RegisterBy' => 'ROOT',
        'LastUser' => 'ROOT'
    ]);
        Channel::create([
            'Description' => 'ANEXO',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Channel::create([
            'Description' => 'PERSONAL',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
        Channel::create([
            'Description' => 'SISTEMA',
            'Status' => true,
            'RegisterBy' => 'ROOT',
            'LastUser' => 'ROOT'
        ]);
    }
} 
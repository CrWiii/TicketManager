<?php

use TicketManager\Entities\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        //PRIMARY-CLASS-USER
        $this->call('AreaTableSeeder');
        $this->call('GroupTableSeeder');
        $this->call('ChargeTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('PersonTableSeeder');

        //PRIMARY-CLASS-LOCAL
        $this->call('MarkTableSeeder');
        $this->call('SectorTableSeeder');
        $this->call('ZoneTableSeeder');
        $this->call('LocalTableSeeder');
        $this->call('CompanyTableSeeder');
        //$this->call('CircuitTableSeeder'); Foul

        //PRIMARY-CLASS-TICKET
        $this->call('StateTableSeeder');
        $this->call('TypeTableSeeder');
        $this->call('PriorityTableSeeder');
        $this->call('ChannelTableSeeder');
        $this->call('ClassTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('BusinessUnitTableSeeder');

	}
}

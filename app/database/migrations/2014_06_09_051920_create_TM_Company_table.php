<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_Company', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('Description', 50)->nullable();
            $table->string('Ruc', 11)->nullable();
            $table->string('Address', 60)->nullable();
            $table->boolean('Status')->nullable();
            $table->string('RegisterBy', 25)->nullable();
            $table->string('LastUser', 25)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TM_Company');
	}

}

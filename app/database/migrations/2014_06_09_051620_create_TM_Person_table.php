<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMPersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_Person', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('Person')->nullable();
            $table->string('search', 65)->nullable();
            $table->boolean('Status')->nullable();
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
		Schema::drop('TM_Person');
	}

}

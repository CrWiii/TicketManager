<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_Group', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('Description', 50)->nullable();
            $table->integer('Area_Id')->nullable();
            $table->boolean('Status')->nullable();
            $table->string('RegisterBy', 25)->nullable();
            $table->string('LastUser', 25)->nullable();
			$table->timestamps();
            $table->foreign('Area_Id')->references('id')->on('TM_Area');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TM_Group');
	}

}

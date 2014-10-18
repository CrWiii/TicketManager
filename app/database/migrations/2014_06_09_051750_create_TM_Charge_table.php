<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMChargeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_Charge', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('Description', 50)->nullable();
            $table->integer('Group_Id')->nullable();
            $table->string('type')->nullable();
            $table->boolean('Status')->nullable();
            $table->string('RegisterBy', 25)->nullable();
            $table->string('LastUser', 25)->nullable();
			$table->timestamps();
            $table->foreign('Group_Id')->references('id')->on('TM_Group');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TM_Charge');
	}

}

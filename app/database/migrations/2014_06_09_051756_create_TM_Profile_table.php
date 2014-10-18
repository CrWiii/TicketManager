<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_Profile', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('description')->nullable();
            $table->integer('User_Id')->nullable();
            $table->integer('Charge_Id')->nullable();
            $table->integer('Area_Id')->nullable();
            $table->integer('Group_Id')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('available')->nullable();

            $table->foreign('User_Id')->references('Id')->on('TM_User');
            $table->foreign('Charge_Id')->references('Id')->on('TM_Charge');
            $table->foreign('Area_Id')->references('Id')->on('TM_Area');
            $table->foreign('Group_Id')->references('Id')->on('TM_Group');
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
		Schema::drop('TM_Profile');
	}

}

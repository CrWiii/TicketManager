<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_History', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('Ticket_Id');
            $table->integer('User_Id');
            $table->text('Indications')->nullable();
            $table->dateTime('deadline_')->nullable();
            $table->string('deadline')->nullable();
            $table->string('attached')->nullable();
            $table->boolean('Status')->nullable();
            $table->string('RegisterBy', 25)->nullable();
            $table->string('LastUser', 25)->nullable();

            $table->timestamps();

            $table->foreign('Ticket_Id')->references('Id')->on('TM_Ticket');
            $table->foreign('User_Id')->references('Id')->on('TM_User');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TM_History');
	}

}

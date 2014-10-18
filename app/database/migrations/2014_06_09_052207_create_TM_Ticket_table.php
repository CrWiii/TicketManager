<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_Ticket', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('Local_Id')->nullable();
            $table->integer('Person_Id')->nullable();
            $table->integer('Charge_Id')->nullable();
            $table->integer('User_Id')->nullable();
            $table->integer('BusinessUnit_Id')->nullable();
            $table->integer('Class_Id')->nullable();
            $table->integer('Type_Id')->nullable();
            $table->integer('Category_Id')->nullable();
            $table->integer('SubCategory_Id')->nullable();
            $table->integer('Specify_Id')->nullable();
            $table->integer('Channel_Id')->nullable();
            $table->integer('Priority_Id')->nullable();
            $table->integer('State_Id')->nullable();
            $table->integer('Active')->nullable();
            $table->text('Description')->nullable();
            $table->text('RejectionReason')->nullable();
            $table->boolean('Status')->nullable();
            $table->string('attached', 120)->nullable();
            $table->boolean('IsFast')->nullable();
            $table->dateTime('DateTicket_')->nullable();
            $table->string('DateTicket')->nullable();
            $table->string('RegisterBy',25)->nullable();
            $table->string('LastUser',25)->nullable();

            $table->timestamps();

            $table->foreign('Local_Id')->references('Id')->on('TM_Local');
            //$table->foreign('Person_Id')->references('Id')->on('TM_Person');
            $table->foreign('User_Id')->references('Id')->on('TM_User');
            $table->foreign('BusinessUnit_Id')->references('Id')->on('TM_BusinessUnit');
            $table->foreign('Class_Id')->references('Id')->on('TM_Class');
            $table->foreign('Type_Id')->references('Id')->on('TM_Type');
            $table->foreign('Category_Id')->references('Id')->on('TM_Category');
            $table->foreign('Channel_Id')->references('Id')->on('TM_Channel');
            $table->foreign('Priority_Id')->references('Id')->on('TM_Priority');
            $table->foreign('State_Id')->references('Id')->on('TM_State');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TM_Ticket');
	}

}

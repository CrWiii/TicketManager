<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMTrackingTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TM_Tracking', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('Ticket_Id');
            $table->integer('Diagnostic_Id');
            $table->integer('Solution_Id');
            $table->integer('User_Id');
            $table->text('Description')->nullable();
            $table->text('recommendations')->nullable();
            $table->boolean('Status');
            $table->string('RegisterBy', 25)->nullable();
            $table->string('LastUser', 25)->nullable();

            $table->timestamps();

            $table->foreign('Ticket_Id')->references('Id')->on('TM_Ticket');
            $table->foreign('Diagnostic_Id')->references('Id')->on('TM_Diagnostic');
            $table->foreign('Solution_Id')->references('Id')->on('TM_Solution');
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
        Schema::drop('TM_Tracking');
    }

}

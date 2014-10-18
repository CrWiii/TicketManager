<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMSolutionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TM_Solution', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('Ticket_Id');
            $table->integer('User_Id');
            $table->boolean('Status');
            $table->text('solve')->nullable();
            $table->dateTime('solveDate_')->nullable();
            $table->text('solveDate')->nullable();
            $table->text('recommendations')->nullable();
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
        Schema::drop('TM_Solution');
    }

}

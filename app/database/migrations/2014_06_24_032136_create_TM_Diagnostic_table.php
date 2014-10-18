<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMDiagnosticTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TM_Diagnostic', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('Ticket_Id');
            $table->integer('Class_Id');
            $table->integer('Category_Id');
            $table->integer('SubCategory_Id')->nullable();
            $table->integer('Specify_Id')->nullable();
            $table->integer('User_Id');
            $table->boolean('Status');
            $table->text('Diagnose');
            $table->dateTime('DiagnoseDate_')->nullable();
            $table->text('DiagnoseDate')->nullable();
            $table->text('possibleSolve')->nullable();
            $table->dateTime('possibleSolveDate_')->nullable();
            $table->text('possibleSolveDate')->nullable();
            $table->string('RegisterBy', 25)->nullable();
            $table->string('LastUser', 25)->nullable();

            $table->timestamps();

            $table->foreign('Ticket_Id')->references('Id')->on('TM_Ticket');
            $table->foreign('Class_Id')->references('Id')->on('TM_Class');
            $table->foreign('Category_Id')->references('Id')->on('TM_Category');
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
        Schema::drop('TM_Diagnostic');
    }

}

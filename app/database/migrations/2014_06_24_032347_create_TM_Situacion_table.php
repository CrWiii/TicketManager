<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMSituacionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TM_Situacion', function(Blueprint $table)
        {
            $table->increments('Id');
            $table->text('Descripcion', 50)->nullable();
            $table->boolean('Estado');
            $table->string('RegistradoPor', 25)->nullable();
            $table->string('UltimomUsuario', 25)->nullable();

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
        Schema::drop('TM_Situacion');
    }

}

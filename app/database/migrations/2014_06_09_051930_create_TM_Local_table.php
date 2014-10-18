<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMLocalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_Local', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('Company_Id')->nullable();
            $table->integer('Spring_Id')->nullable();
            $table->integer('Circuit_Id')->nullable();
            $table->integer('Zone_Id')->nullable();
            $table->integer('Mark_Id')->nullable();
            $table->integer('Sector_Id')->nullable();
            $table->string('Description')->nullable();
            $table->string('LocalAddress')->nullable();
            $table->string('urbanization')->nullable();
            $table->string('IdTiendaAntiguoKey')->nullable();
            $table->string('CodSucSpring')->nullable();
            $table->boolean('IsStore')->nullable();
            $table->boolean('IsOffice')->nullable();
            $table->string('ServerIp')->nullable();
            $table->boolean('Delivery')->nullable();
            $table->string('RPC')->nullable();
            $table->string('Anexo')->nullable();
            $table->string('StorePhone')->nullable();
            $table->string('AdminTerminalUser')->nullable();
            $table->string('ControlTerminalUser')->nullable();
            $table->string('AdminEmail')->nullable();
            $table->string('ControlEmail')->nullable();
            $table->string('Status',1)->nullable();
            $table->string('RegisterBy', 25)->nullable();
            $table->string('LastUser', 25)->nullable();

            $table->foreign('Mark_Id')->references('Id')->on('TM_Mark');
            $table->foreign('Sector_Id')->references('Id')->on('TM_Sector');
            $table->foreign('Zone_Id')->references('Id')->on('TM_Zone');
            $table->foreign('Circuit_Id')->references('Id')->on('TM_Circuit');
            $table->foreign('Company_Id')->references('Id')->on('TM_Company');
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
		Schema::drop('TM_Local');
	}

}

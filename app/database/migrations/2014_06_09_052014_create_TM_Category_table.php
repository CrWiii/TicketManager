<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_Category', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('Class_Id')->nullable();
            $table->integer('Sub_Id')->nullable();
            $table->integer('level')->nullable();
            $table->string('Description', 50)->nullable();
            $table->boolean('Status')->nullable();
            $table->string('RegisterBy', 25)->nullable();
            $table->string('LastUser', 25)->nullable();
            $table->timestamps();
            $table->foreign('Class_Id')->references('Id')->on('TM_Class');
            $table->foreign('Sub_Id')->references('Id')->on('TM_Category');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TM_Category');
	}

}

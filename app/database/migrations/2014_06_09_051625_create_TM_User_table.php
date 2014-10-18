<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTMUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TM_User', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('username', 25)->nullable();
            $table->string('FullName', 60)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password')->nullable();
            $table->string('type', 5)->nullable();
            $table->integer('person_Id')->nullable();
            $table->integer('Class_Id')->nullable();
            $table->boolean('Status')->default(false)->nullable();
            $table->string('LastUser',25)->nullable();
            $table->string('RegisterBy', 25)->nullable();
            $table->string('remember_token')->nullable();
			$table->timestamps();

            $table->foreign('person_Id')->references('id')->on('TM_Person');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TM_User');
	}

}

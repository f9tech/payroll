<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('fathername');
            $table->date('dob');
            $table->string('qualification');
            $table->string('mobile');
            $table->string('emailid');
            $table->text('address');
            $table->date('doj');
            $table->string('branch');
            $table->string('division');
            $table->string('designation');
            $table->float('salary');
            $table->text('description');
            $table->string('status');
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
		Schema::drop('employees');
	}

}

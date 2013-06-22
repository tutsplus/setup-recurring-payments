<?php

class Create_Users_Table {    

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('users');

    }

}
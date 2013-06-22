<?php

class Create_Payments_Table {    

	public function up()
    {
		Schema::create('payments', function($table) {
			$table->increments('id');
			$table->string('txn_id');
			$table->integer('user_id');
			$table->string('paypal_id');
			$table->integer('subscription');
			$table->integer('expires');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('payments');

    }

}
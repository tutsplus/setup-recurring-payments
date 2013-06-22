<?php
class User extends Eloquent {

	public function subscription(){
		return Payment::where('user_id', '=', Auth::user()->id)
					->where('expires', '>', date('Y-m-d H:i:s', time()))
					->first(array('subscription', 'expires', 'paypal_id', 'txn_id'));
	}

}
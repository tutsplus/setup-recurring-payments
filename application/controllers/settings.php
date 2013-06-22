<?php
class Settings_Controller extends Base_Controller {

	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth');
	}

	public function get_index(){

		$this->layout->title = 'Settings';
		$this->layout->nest('content', 'settings.index', array(
			'subscription' => Auth::user()->subscription(),
		));

	}

	public function get_cancel(){

		$this->layout->title = 'Cancel Subscription';
		$this->layout->nest('content', 'settings.cancel', array(
			'subscription' => Auth::user()->subscription(),
		));

	}

	public function post_cancel(){

		$input = Input::all();

		$req = array(
			'USER'      => 'YOUR_API_USER',
			'PASSWORD'  => 'YOUR_API_PASSWORD',
			'SIGNATURE' => 'YOUR_API_SIGNATURE',
			'VERSION'   => '76.0',
			'METHOD'    => 'ManageRecurringPaymentsProfileStatus',
			'PROFILEID' => urlencode($input['paypal_id']),
			'ACTION'    => 'Cancel',
			'NOTE'      => 'User cancelled on website',
		);

		$ch = curl_init();

		// Swap these if you're testing with the sandbox
		// curl_setopt($ch, CURLOPT_URL, 'https://api-3t.sandbox.paypal.com/nvp');
		curl_setopt($ch, CURLOPT_URL, 'https://api-3t.paypal.com/nvp');
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($req));
		curl_exec($ch);
		curl_close($ch);

		return Redirect::to('settings')->with('cancelled', true);

	}

}
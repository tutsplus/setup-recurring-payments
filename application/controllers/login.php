<?php
class Login_Controller extends Base_Controller {

	public function get_index(){

		$this->layout->title = 'Login';
		$this->layout->nest('content', 'login.index');

	}

	public function post_index(){

		$creds = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
		);

		if(Auth::attempt($creds)){
			return Redirect::to('/');
		}

		return Redirect::back()->with('error', true);

	}

}
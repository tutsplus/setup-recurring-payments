<?php
class Register_Controller extends Base_Controller {

	public function get_index(){

		$this->layout->title = 'Register';
		$this->layout->nest('content', 'register.index');

	}

	public function post_index(){

		$data = array(
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'password' => Hash::make(Input::get('password')),
		);

		$user = User::create($data);
		Auth::login($user);

		return Redirect::to('/');

	}

}
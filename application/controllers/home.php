<?php
class Home_Controller extends Base_Controller {

	public function get_index(){

		$this->layout->title = 'Home';
		$this->layout->nest('content', 'home.index');

	}

}
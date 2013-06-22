<?php
class Dashboard_Controller extends Base_Controller {

	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth');
	}

	public function get_index(){

		$this->layout->title = 'Dashboard';
		$this->layout->nest('content', 'dashboard.index');

	}

}
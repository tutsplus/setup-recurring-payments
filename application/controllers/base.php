<?php

class Base_Controller extends Controller {

	public $layout = 'layouts.main';
	public $restful = true;

	public function __construct(){

		parent::__construct();

		Asset::container('header')->add('bootstrap', 'assets/css/bootstrap.min.css');
		Asset::container('header')->add('style', 'assets/css/style.css');

		Asset::container('footer')->add('jquery', 'http://code.jquery.com/jquery-latest.min.js');
		Asset::container('footer')->add('bootstrap', 'assets/js/bootstrap.min.js');
		Asset::container('footer')->add('main', 'assets/js/main.js');

	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}
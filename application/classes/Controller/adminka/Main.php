<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminka_Main extends Controller {

	public function action_index()
	{
		$this->response->body('Hello!');
	}

} // End Welcome

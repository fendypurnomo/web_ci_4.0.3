<?php

namespace App\Controllers;

class WelcomeMessage extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
}

<?php

namespace App\Controllers\Administrator;

use App\Controllers\BaseController;

class Signout extends BaseController
{
	public function index()
	{
		return session()->destroy();
	}
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Template extends BaseController
{
	public function AdministratorIndex()
	{
		$data = [
			'title' => 'Web Aplikasi'
		];
		return view('administrator/index', $data);
	}

	public function AdministratorDashboard()
	{
		$data = [
			'title' => 'Administrator Aplikasi'
		];
		return view('administrator/dashboard', $data);
	}
}

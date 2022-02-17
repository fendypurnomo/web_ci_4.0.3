<?php

namespace App\Controllers\Administrator;

use App\Controllers\BaseController;

class Partials extends BaseController
{
	protected $pathDir;
	protected $pathNotFound;
	protected $pathPartial;

	public function __construct()
	{
		$this->pathDir			= APPPATH . '/Views/administrator/partials/';
		$this->pathNotFound	= 'administrator/partials/pageNotFound/default';
		$this->pathPartial	= 'administrator/partials/';
	}

	public function signin()
	{
		return view($this->pathPartial . 'signin/default');
	}

	public function signup()
	{
		return view($this->pathPartial . 'signup/default');
	}

	public function forgotPassword()
	{
		return view($this->pathPartial . 'recoveryAccount/default');
	}

	public function views($a = 'home', $b = null, $c = null, $d = null, $e = null, $page = 'default')
	{
		if (!is_dir($this->pathDir . $a)) {
			return view($this->pathNotFound);
		}

		$data = [
			'breadcrumb' => [$a, $b, $c, $d, $e]
		];

		return view($this->pathPartial . $a . '/' . $b . '/' . $c . '/' . $d . '/' . $e . '/' . $page, $data);
	}
}

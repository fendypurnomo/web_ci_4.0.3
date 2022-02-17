<?php

namespace App\Controllers\Administrator\Pages;

use App\Controllers\BaseController;

class Pages extends BaseController
{
	public function view($page = 'home')
	{
		if (!is_file(APPPATH . '/Views/administrator/pages/contents/' . $page . '.php')) {
			$data = [
				'page' => $page
			];

			return $this->template->load('administrator/template', 'administrator/pages/contents/page_not_found', $data);
		}

		$data = [];

		return $this->template->load('administrator/template', 'administrator/pages/contents/' . $page, $data);
	}

	public function views($a = null, $b = null, $c = null, $page = 'default')
	{
		if (!is_file(APPPATH . '/Views/administrator/pages/contents/' . $a . '/' . $b . '/' . $c . '/' . $page . '.php')) {
			$data = [
				'page' => $page
			];

			return $this->template->load('administrator/template', 'administrator/pages/contents/page_not_found', $data);
		}

		$data = [];

		return $this->template->load('administrator/template', 'administrator/pages/contents/' . $a . '/' . $b . '/' . $c . '/' . $page, $data);
	}
}

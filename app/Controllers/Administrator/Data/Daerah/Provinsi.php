<?php

namespace App\Controllers\Administrator\Data\Daerah;

use App\Controllers\BaseController;
use App\Models\Administrator\Daerah\ProvinsiModel;

class Provinsi extends BaseController
{
	protected $model;

	public function __construct()
	{
		$this->model = new ProvinsiModel();
	}

	public function index($limit = 10, $offset = 0)
	{
		$data = $this->model->findAll($limit, $offset);
		echo json_encode($data);
	}

	public function array_provinsi()
	{
		$q = $this->model->findAll();
		$d = [];
		$i = 1;

		foreach ($q as $r) {
			$d[] = [
				$i,
				$r['id'],
				$r['name'],
			];
			$i++;
		}

		$output = [
			'draw'            => $_REQUEST['draw'],
			'recordsTotal'    => intval(34),
			'recordsFiltered' => intval(34),
			'data'            => $d,
		];

		echo json_encode($output);
	}
}

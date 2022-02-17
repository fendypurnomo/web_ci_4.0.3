<?php

namespace App\Controllers\Administrator\Data\Daerah;

use App\Controllers\BaseController;
use App\Models\Administrator\Daerah\KelurahanDesaModel;

class KelurahanDesa extends BaseController
{
	protected $model;

	public function __construct()
	{
		$this->model = new KelurahanDesaModel();
	}

	public function index($limit = 10, $offset = 0)
	{
		$data = $this->model->findAll($limit, $offset);
		echo json_encode($data);
	}
}

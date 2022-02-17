<?php

namespace App\Controllers\Administrator\Data;

use App\Controllers\BaseController;
use App\Models\Administrator\Users\UsersModel;

class Users extends BaseController
{
	protected $model;

	public function __construct()
	{
		$this->model = new UsersModel();
	}

	public function profileUser()
	{
		$data	= $this->model->where('pengguna_nama', $_SESSION['username'])->findAll();
		echo json_encode($data);
	}

	public function allUsers($limit = 10, $offset = 0)
	{
		$data	= $this->model->findAll($limit, $offset);
		echo json_encode($data);
	}

	public function addUser()
	{
	}

	public function updateUser()
	{
	}

	public function deleteUsers()
	{
	}
}

<?php

namespace App\Models\Administrator\Users;

use CodeIgniter\Model;

class UsersModel extends Model
{
	protected $table			= 'tabel_pengguna';
	protected $primaryKey	= 'pengguna_id ';

	protected $allowedFields = [
		'pengguna_nama',
		'pengguna_nama_depan',
		'pengguna_nama_belakang',
		'pengguna_email',
		'pengguna_jenis_kelamin'
	];

	protected $useTimestamps = true;
	protected $createdField	 = 'pengguna_tgl_dibuat';
	protected $updatedField	 = 'pengguna_tgl_diperbaharui';
}

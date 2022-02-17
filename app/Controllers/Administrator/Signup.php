<?php

namespace App\Controllers\Administrator;

use App\Controllers\BaseController;
use App\Models\Administrator\Signup\SignupModel;

class Signup extends BaseController
{
	public function createAccount()
	{
		if (!$this->validate('signup')) {
			$output = [
				'success' => false,
				'status'  => 0,
				'errText' => $this->validator->getErrors(),
				'token'   => [
					'csrf' => csrf_hash()
				]
			];
		} else {
			$model  = new SignupModel();
			$number = random_string('numeric', 7);
			$post		= $this->request->getPost();

			$data = [
				'pengguna_nama'          => strip_slashes(strtolower($post['fName'] . $post['lName']) . $number),
				'pengguna_nama_depan'    => strip_slashes(ucwords($post['fName'])),
				'pengguna_nama_belakang' => strip_slashes(ucwords($post['lName'])),
				'pengguna_email'         => $post['email'],
				'pengguna_sandi'         => password_hash($post['pass'], PASSWORD_DEFAULT),
				'pengguna_jenis_kelamin' => $post['gender']
			];

			$result = $model->insert($data);

			if ($result) {
				$output = [
					'success' => true,
					'status'  => 1,
					'message' => 'Pendaftaran akun berhasil, periksa email Anda dan buka pesan baru untuk aktivasi akun Anda.',
					'url'     => '/signin',
					'token'   => [
						'csrf' => csrf_hash()
					]
				];
			} else {
				$output = [
					'success' => false,
					'status'  => 0,
					'message' => 'Pendaftaran akun gagal, periksa kembali data yang Anda masukkan.',
					'token'   => [
						'csrf' => csrf_hash()
					]
				];
			}
		}
		echo json_encode($output);
	}
}

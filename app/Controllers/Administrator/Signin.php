<?php

namespace App\Controllers\Administrator;

use App\Controllers\BaseController;
use App\Models\Administrator\Signin\SigninModel;
use Config\Services;
use Firebase\JWT\JWT;

class Signin extends BaseController
{
	public function authenticate()
	{
		if ($this->request->getMethod() == 'post') {
			if (!$this->validate('signin')) {
				$output = [
					'success' => false,
					'status'  => 0,
					'errText' => $this->validator->getErrors(),
					'token'   => [
						'csrf' => csrf_hash()
					]
				];
			} else {
				$model = new SigninModel();
				$post	 = $this->request->getPost();
				$name	 = $post['name'];
				$pass	 = $post['pass'];

				$row = $model->where('pengguna_nama', $name)
					->orWhere('pengguna_email', $name)
					->limit(1)
					->first();

				if ($row > 0) {
					if (password_verify($pass, $row['pengguna_sandi'])) {
						$newdata = [
							'username'  => $row['pengguna_nama'],
							'fullname'  => $row['pengguna_nama_depan'] . ' ' . $row['pengguna_nama_belakang'],
							'email'     => $row['pengguna_email'],
							'logged_in' => TRUE
						];

						session()->set($newdata);

						$privateKey = Services::getPrivateKey();

						$payload = [
							'username' => $row['pengguna_nama'],
							'email'    => $row['pengguna_email'],
							'iat'      => time()
						];

						$jwt = JWT::encode($payload, $privateKey, 'HS256');

						$output = [
							'success' => true,
							'status'  => 1,
							'url'     => 'administrator',
							'token'   => [
								'csrf' => csrf_hash(),
								'jwt'  => $jwt
							]
						];
					} else {
						$output = [
							'success' => false,
							'status'  => 01,
							'errText' => [
								'pass' => 'Kata sandi yang Anda masukkan salah!'
							],
							'token'		=> [
								'csrf' => csrf_hash()
							]
						];
					}
				} else {
					$output = [
						'success' => false,
						'status'  => 02,
						'errText' => [
							'name' => 'Maaf! Akun Anda tidak dapat ditemukan.'
						],
						'token'		=> [
							'csrf' => csrf_hash()
						]
					];
				}
			}
			echo json_encode($output);
		} else {
			echo 'Maaf! Akses tidak diperbolehkan.';
		}
	}
}

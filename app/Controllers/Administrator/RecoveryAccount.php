<?php

namespace App\Controllers\Administrator;

use App\Controllers\BaseController;
use App\Models\Administrator\recoveryAccount\RecoveryAccountModel;

class RecoveryAccount extends BaseController
{
	protected $model;

	public function __construct()
	{
		$this->model = new RecoveryAccountModel();
	}

	public function checkEmail()
	{
		if ($this->request->getMethod() == 'post') {
			if (!$this->validate('recoveryAccount')) {
				$output = [
					'success' => false,
					'status'  => 0,
					'errText' => $this->validator->getErrors(),
					'token'   => [
						'csrf' => csrf_hash()
					]
				];
			} else {
				$otp = random_string('numeric', 6);
				$code = random_string('alnum', 20);

				$this->model->where('pengguna_email', $_POST['email'])->set(['pengguna_kode_otp' => $otp, 'pengguna_sesi' => $code])->update();

				$session = session();
				$session->set(['step' => '2', 'code' => $code]);

				$output = [
					'success' => true,
					'status'  => 1,
					'url'     => [
						'path' => '/forgotPassword',
						'step' => $_SESSION['step'],
						'code' => $code
					],
					'token'  => [
						'csrf' => csrf_hash(),
						'jwt'  => ''
					]
				];
			}
			echo json_encode($output);
		} else {
			echo 'Maaf! Akses tidak diperbolehkan.';
		}
	}

	public function checkOtp()
	{
		if ($this->request->getMethod() == 'post') {
			if (!$this->validate('checkOtp')) {
				$output = [
					'success' => false,
					'status'  => 0,
					'errText' => $this->validator->getErrors(),
					'token'   => [
						'csrf' => csrf_hash()
					]
				];
			} else {
				$row = $this->model->where(['pengguna_kode_otp' => $_POST['otp'], 'pengguna_sesi' => $_SESSION['code']])->limit(1)->first();

				$session = session();
				$session->set(['step' => '3']);

				if ($row > 0) {
					$output = [
						'success' => true,
						'status'  => 1,
						'url'     => [
							'path' => '/forgotPassword',
							'step' => $_SESSION['step'],
							'code' => $_SESSION['code']
						],
						'token'  => [
							'csrf' => csrf_hash(),
							'jwt'  => ''
						]
					];
				} else {
					$output = [
						'success' => false,
						'status'  => 0,
						'errText' => [
							'otp' => 'Kode OTP yang Anda masukkan tidak valid!'
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

	public function resetPassword()
	{
		if ($this->request->getMethod() == 'post') {
			if (!$this->validate('resetPassword')) {
				$output = [
					'success' => false,
					'status'  => 0,
					'errText' => $this->validator->getErrors(),
					'token'   => [
						'csrf' => csrf_hash()
					]
				];
			} else {
				$this->model->where('pengguna_sesi', $_SESSION['code'])->set('pengguna_sandi', password_hash($_POST['newPass'], PASSWORD_DEFAULT))->update();

				$session = session();
				$session->remove(['code']);

				$output = [
					'success' => true,
					'status'  => 1,
					'url'     => [
						'path' => '/signin'
					],
					'token'   => [
						'csrf' => csrf_hash()
					],
					'message' => 'Setel ulang kata sandi berhasil, silahkan masuk menggunakan kata sandi baru Anda.',
				];
			}
			echo json_encode($output);
		} else {
			echo 'Maaf! Akses tidak diperbolehkan.';
		}
	}

	public function _sendOtp()
	{
		$config = ['protocol' => 'sendmail', 'mailPath' => '/usr/sbin/sendmail', 'charset' => 'iso-8859-1', 'wordWrap' => true];
		$email = \Config\Services::email();
		$email->initialize($config);
		$email->setFrom('fendypurnomo98@gmail.com', 'Fendy Purnomo');
		$email->setTo($email);
		$email->setSubject('Permintaan setel ulang kata sandi');
		$email->setMessage('Klik tautan dibawah ini untuk mensetel ulang kata sandi Anda.');
		$email->send();

		if (!$email->send()) {
		}
	}
}

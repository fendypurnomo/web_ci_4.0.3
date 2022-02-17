<?php

namespace App\Models\Administrator\RecoveryAccount;

use CodeIgniter\Model;

class RecoveryAccountModel extends Model
{
	protected $table = 'tabel_pengguna';
	protected $primaryKey = 'pengguna_id';

	protected $allowedFields = ['pengguna_nama', 'pengguna_email', 'pengguna_sandi', 'pengguna_kode_otp', 'pengguna_sesi'];

	protected $formInput = [
		'email' => [
			'id'           => 'email',
			'name'         => 'email',
			'placeholder'  => 'E-mail',
			'autocomplete' => 'off',
			'autofocus'    => '',
			'ng-class'     => '{\'is-invalid\': forgotPasswordForm.$errText.email.$invalid}',
			'ng-model'     => 'inputForgotPassword.email'
		],
		'otp' => [
			'id'           => 'otp',
			'name'         => 'otp',
			'placeholder'  => 'Masukkan Kode OTP',
			'autocomplete' => 'off',
			'autofocus'    => '',
			'ng-class'     => '{\'is-invalid\': forgotPasswordForm.$errText.otp.$invalid}',
			'ng-model'     => 'inputForgotPassword.otp'
		],
		'newPass' => [
			'id'           => 'newPass',
			'name'         => 'newPass',
			'placeholder'  => 'Sandi Baru',
			'autocomplete' => 'off',
			'autofocus'    => '',
			'ng-class'     => '{\'is-invalid\': forgotPasswordForm.$errText.newPass.$invalid}',
			'ng-model'     => 'inputForgotPassword.newPass'
		],
		'confirmNewPass' => [
			'id'           => 'confirmNewPass',
			'name'         => 'confirmNewPass',
			'placeholder'  => 'Konfirmasi Sandi Baru',
			'autocomplete' => 'off',
			'ng-class'     => '{\'is-invalid\': forgotPasswordForm.$errText.confirmNewPass.$invalid}',
			'ng-model'     => 'inputForgotPassword.confirmNewPass'
		],
		'inputClass' => [
			'class' => 'form-control form-control-lg bg-light rounded-pill'
		]
	];

	protected $formButton = [
		'submit' => [
			'type'  => 'submit',
			'name'  => 'resetpassword',
			'class' => 'btn btn-lg btn-block btn-primary rounded-pill d-flex justify-content-center waves-effect waves-light'
		],
		'spinner' => '<span role="status" aria-hidden="true" ng-class="{\'spinner-border spinner-border my-auto mr-2 p-2\': spinner}"></span>'
	];
}

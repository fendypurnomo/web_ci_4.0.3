<?php

namespace App\Models\Administrator\Signup;

use CodeIgniter\Model;

class SignupModel extends Model
{
	protected $table = 'tabel_pengguna';
	protected $primaryKey = 'pengguna_id';

	protected $allowedFields = [
		'pengguna_nama',
		'pengguna_nama_depan',
		'pengguna_nama_belakang',
		'pengguna_email',
		'pengguna_sandi',
		'pengguna_jenis_kelamin',
		'pengguna_tgl_dibuat',
		'pengguna_aktivasi'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'pengguna_tgl_dibuat';
	protected $updatedField  = 'pengguna_tgl_diperbaharui';

	protected $classInput = ['class' => 'form-control form-control-lg bg-light rounded-pill'];
	protected $classRadio = ['class' => 'custom-control-input'];
	protected $classLabel = ['class' => 'custom-control-label'];
	protected $spanDanger = '<span class="text-danger">*</span>';

	protected $formInput = [
		'fName' => [
			'id'           => 'fName',
			'name'         => 'fName',
			'placeholder'  => 'Nama Depan',
			'autocomplete' => 'off',
			'autofocus'    => '',
			'ng-class'     => '{\'is-invalid\': signupForm.$errText.fName.$invalid}',
			'ng-model'     => 'inputSignup.fName'
		],
		'lName' => [
			'id'           => 'lName',
			'name'         => 'lName',
			'placeholder'  => 'Nama Belakang',
			'autocomplete' => 'off',
			'ng-class'     => '{\'is-invalid\': signupForm.$errText.lName.$invalid}',
			'ng-model'     => 'inputSignup.lName'
		],
		'email' => [
			'id'           => 'email',
			'name'         => 'email',
			'placeholder'  => 'E-mail',
			'autocomplete' => 'off',
			'ng-class'     => '{\'is-invalid\': signupForm.$errText.email.$invalid}',
			'ng-model'     => 'inputSignup.email'
		],
		'pass' => [
			'id'           => 'pass',
			'name'         => 'pass',
			'placeholder'  => 'Kata Sandi',
			'autocomplete' => 'off',
			'ng-class'     => '{\'is-invalid\': signupForm.$errText.pass.$invalid}',
			'ng-model'     => 'inputSignup.pass'
		],
		'confirmPass' => [
			'id'           => 'confirmPass',
			'name'         => 'confirmPass',
			'placeholder'  => 'Konfirmasi Kata Sandi',
			'autocomplete' => 'off',
			'ng-class'     => '{\'is-invalid\': signupForm.$errText.confirmPass.$invalid}',
			'ng-model'     => 'inputSignup.confirmPass'
		],
		'genderMan' => [
			'id'       => 'gender',
			'name'     => 'gender',
			'ng-class' => '{\'is-invalid\': signupForm.$errText.gender.$invalid}',
			'ng-model' => 'inputSignup.gender'
		],
		'genderWoman' => [
			'id'       => 'genderWoman',
			'name'     => 'gender',
			'ng-class' => '{\'is-invalid\': signupForm.$errText.gender.$invalid}',
			'ng-model' => 'inputSignup.gender'
		]
	];

	protected $formButton = [
		'submit' => [
			'id'      => 'signup',
			'class'   => 'btn btn-lg btn-block btn-primary rounded-pill d-flex justify-content-center waves-effect waves-light',
			'type'    => 'submit',
			'name'    => 'signup',
			'content' => '<span role="status" aria-hidden="true" ng-class="{\'spinner-border spinner-border my-auto mr-2 p-2\': spinner}"></span>Daftar'
		]
	];
}

<?php

namespace App\Models\Administrator\Signin;

use CodeIgniter\Model;

class SigninModel extends Model
{
	protected $table = 'tabel_pengguna';
	protected $primaryKey = 'pengguna_id';
	protected $returnType = 'array';

	protected $allowedFields = ['pengguna_nama', 'pengguna_email', 'pengguna_sandi'];

	protected $formInput = [
		'name' => [
			'id'           => 'name',
			'class'        => 'form-control form-control-lg bg-light rounded-pill',
			'type'         => 'text',
			'name'         => 'name',
			'placeholder'  => 'Nama Pengguna atau Email',
			'autocomplete' => 'off',
			'autofocus'    => '',
			'ng-class'     => '{\'is-invalid\': signinForm.$errText.name.$invalid}',
			'ng-model'     => 'inputSignin.name'
		],
		'pass' => [
			'id'           => 'pass',
			'class'        => 'form-control form-control-lg bg-light rounded-pill',
			'type'         => '{{inputType}}',
			'name'         => 'pass',
			'placeholder'  => 'Kata Sandi',
			'autocomplete' => 'off',
			'ng-class'     => '{\'is-invalid\': signinForm.$errText.pass.$invalid}',
			'ng-model'     => 'inputSignin.pass'
		]
	];

	protected $formButton = [
		'submit' => [
			'id'      => 'submit',
			'class'   => 'btn btn-lg btn-block btn-primary rounded-pill d-flex justify-content-center waves-effect waves-light',
			'type'    => 'submit',
			'name'    => 'signin',
			'content' => '<span role="status" aria-hidden="true" ng-class="{\'spinner-border spinner-border my-auto mr-2 p-2\': spinner}"></span>Masuk'
		]
	];
}

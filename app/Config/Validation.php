<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class
	];

	/**
	 * Specifies the views that are used to display the errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single'
	];

	public $signin = [
		'name' => [
			'label'  => 'Nama Pengguna atau E-mail',
			'rules'  => 'required',
			'errors' => [
				'required' => 'Masukkan {field} Anda!'
			]
		],
		'pass' => [
			'label'  => 'Kata Sandi',
			'rules'  => 'required',
			'errors' => [
				'required' => 'Masukkan {field} Anda!'
			]
		]
	];

	public $signup = [
		'fName' => [
			'label'  => 'Nama Depan',
			'rules'  => 'required|alpha_space|min_length[2]',
			'errors' => [
				'required'    => 'Masukkan {field} Anda',
				'alpha_space' => 'Masukkan hanya karakter huruf dan spasi',
				'min_length'  => 'Masukkan minimal 2 karakter'
			]
		],
		'lName' => [
			'label'  => 'Nama Belakang',
			'rules'  => 'required|alpha_space|min_length[2]',
			'errors' => [
				'required'    => 'Masukkan {field} Anda',
				'alpha_space' => 'Masukkan hanya karakter huruf dan spasi',
				'min_length'  => 'Masukkan minimal 2 karakter'
			]
		],
		'email' => [
			'label'  => 'E-mail',
			'rules'  => 'required|valid_email|is_unique[tabel_pengguna.pengguna_email]',
			'errors' => [
				'required'    => 'Masukkan alamat {field} Anda',
				'valid_email' => '{field} yang Anda masukkan tidak valid',
				'is_unique'   => 'Alamat {field} yang Anda masukkan sudah terdaftar'
			]
		],
		'pass' => [
			'label'  => 'Sandi',
			'rules'  => 'required|min_length[8]',
			'errors' => [
				'required'   => 'Masukkan {field} Anda',
				'min_length' => 'Masukkan minimal 8 karakter'
			]
		],
		'confirmPass' => [
			'label'  => 'Konfirmasi Sandi',
			'rules'  => 'required|matches[pass]',
			'errors' => [
				'required' => 'Masukkan {field} Anda',
				'matches'  => '{field} Anda tidak cocok'
			]
		],
		'gender' => [
			'label'  => 'Jenis Kelamin',
			'rules'  => 'required',
			'errors' => [
				'required' => 'Pilih {field} Anda'
			]
		]
	];

	public $recoveryAccount = [
		'email' => [
			'label'  => 'E-mail',
			'rules'  => 'required|valid_email|is_not_unique[tabel_pengguna.pengguna_email]',
			'errors' => [
				'required'      => 'Masukkan {field} Anda!',
				'valid_email'   => '{field} yang Anda masukkan tidak valid!',
				'is_not_unique' => '{field} Anda tidak ditemukan/tidak terdaftar!'
			]
		]
	];

	public $checkOtp = [
		'otp' => [
			'label'  => 'Kode OTP',
			'rules'  => 'required',
			'errors' => [
				'required' => 'Masukkan {field} Anda!'
			]
		]
	];

	public $resetPassword = [
		'newPass' => [
			'label'  => 'sandi baru',
			'rules'  => 'required|min_length[8]',
			'errors' => [
				'required'   => 'Masukkan {field} Anda!',
				'min_length' => 'Masukkan {field} minimal 8 karakter'
			]
		],
		'confirmNewPass' => [
			'label'  => 'konfirmasi sandi baru',
			'rules'  => 'required|matches[newPass]',
			'errors' => [
				'required' => 'Masukkan {field} Anda!',
				'matches'  => 'Konfirmasi sandi baru tidak cocok!'
			]
		]
	];
}

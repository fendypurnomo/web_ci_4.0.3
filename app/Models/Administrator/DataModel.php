<?php

namespace App\Models\Administrator;

use CodeIgniter\Model;

class DataModel extends Model
{
	protected $tables = [];

	protected $forms = ['group', 'row'];

	protected $background = [
		'gradient-primary',
		'gradient-success',
		'gradient-danger',
		'gradient-warning'
	];
}

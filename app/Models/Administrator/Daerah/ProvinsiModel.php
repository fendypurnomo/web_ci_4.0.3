<?php

namespace App\Models\Administrator\Daerah;

use CodeIgniter\Model;

class ProvinsiModel extends Model
{
	protected $table			= 'ref_id_provinces';
	protected $primaryKey	= 'id';

	protected $allowedFields	= ['id', 'name'];
}

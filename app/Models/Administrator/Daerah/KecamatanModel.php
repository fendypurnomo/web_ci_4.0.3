<?php

namespace App\Models\Administrator\Daerah;

use CodeIgniter\Model;

class KecamatanModel extends Model
{
	protected $table			= 'ref_id_districts';
	protected $primaryKey	= 'id';

	protected $allowedFields = ['id', 'regency_id', 'name'];
}

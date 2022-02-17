<?php

namespace App\Models\Administrator\Daerah;

use CodeIgniter\Model;

class KabupatenKotaModel extends Model
{
	protected $table			= 'ref_id_regencies';
	protected $primaryKey	= 'id';

	protected $allowedFields = ['id', 'province_id', 'name'];
}

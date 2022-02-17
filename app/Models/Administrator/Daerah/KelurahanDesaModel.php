<?php

namespace App\Models\Administrator\Daerah;

use CodeIgniter\Model;

class KelurahanDesaModel extends Model
{
	protected $table			= 'ref_id_villages';
	protected $primaryKey	= 'district_id';

	protected $allowedFields	= ['district_id', 'villages_id', 'villages_name'];
}

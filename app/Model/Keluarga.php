<?php

namespace sigkat\Model;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    //
	protected $primaryKey = 'id_keluarga';
	protected $table = 'tbl_keluarga';
	public $timestamps = false;

	protected $fillable = [
		'id_kk',
		'id_lingkungan',
	];
}

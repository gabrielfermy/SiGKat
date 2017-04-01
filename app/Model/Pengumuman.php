<?php

namespace sigkat\Model;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    //
	protected $primaryKey = 'id_pengumuman';
	protected $table = 'tbl_pengumuman';
	public $timestamps = false;

	protected $fillable = [
		'tgl_pengumuman',
		'id_jenis_pengumuman',
		'tema_pengumuman',
		'isi_pengumuman'
	];
}

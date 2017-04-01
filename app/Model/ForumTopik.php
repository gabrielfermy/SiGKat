<?php

namespace sigkat\Model;

use Illuminate\Database\Eloquent\Model;

class ForumTopik extends Model
{
    //
	protected $primaryKey = 'id_topik';
	protected $table = 'tbl_forum_topik';
	public $timestamps = false;

	protected $fillable = [
		'nm_topik',
		'id_forum_kategori',
		'waktu_buat_topik',
		'id_pembuat',
		'desc_topik',
	];

	//relationship

	//1 topik bisa memiliki banyak post
	public function topikPosts () {

	}
}

<?php

namespace sigkat\Model;

use Illuminate\Database\Eloquent\Model;

class ForumKategori extends Model
{
    //
	protected $primaryKey = 'id_kategori';
	protected $table = 'tbl_forum_kategori';
	public $timestamps = false;

	protected $fillable = [
		'nm_kategori',
		'id_post_last',
		'kat_desc'
	];
}

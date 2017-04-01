<?php

namespace sigkat\Model;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    //
	protected $primaryKey = 'id_post';
	protected $table = 'tbl_forum_post';
	public $timestamps = false;

	protected $fillable = [
		'wkt_kirim',
		'id_user',
		'id_forum_kategori',
		'id_forum_topik',
		'jdl_post',
		'isi_post',
		'waktu_review',
		'id_reviewer',
	];

	//Relationship
	//satu post hanya bisa ada dalam 1 kategori
	//satu post hanya memiliki satu user id (id pengirimnya)
	//
}

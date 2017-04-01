<?php

namespace sigkat\Model;

use Illuminate\Database\Eloquent\Model;

class Umat extends Model
{
    //
	protected $primaryKey = 'id_umat';
	protected $table = 'tbl_umat';
	public $timestamps = false;

	protected $fillable = [
		'nama_depan',
		'nama_belakang',
		'jk',
		'tempat_lahir',
		'tanggal_lahir',
		'alamat',
		'no_telp',
		'id_keluarga',
		'id_lingkungan',
		'path_gambar',
	];

	//Relationship
	//Umat bisa saja user bisa saja tidak
	//Satu umat bisa memiliki banyak sakramen
	public function SakramenUmat(){
		return $this->hasMany('sigkat\Model\SakramenUmat');
	}
}

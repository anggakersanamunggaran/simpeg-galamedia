<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'tbl_master_jabatan';
    protected $fillable = ['nama_jabatan','level'];

     public function pegawai(){
		return $this->hasMany('pegawai','id_jabatan');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table = 'tbl_master_kehadiran';
    protected $fillable = ['status_kehadiran'];

     public function pegawai(){
		return $this->belongsToMany('App\Pegawai','tbl_data_tunjangan','id_kehadiran','id_pegawai');
	}
}

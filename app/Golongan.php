<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Golongan extends Model
{
	

    protected $table = 'tbl_master_golongan';
    protected $fillable = ['golongan', 'uraian','level'];
    
    public function pegawai(){
		return $this->hasMany('App\Pegawai','id_golongan');
	}

	
}
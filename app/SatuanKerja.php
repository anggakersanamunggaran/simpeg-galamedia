<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatuanKerja extends Model
{
    protected $table = 'tbl_master_satuan_kerja';
    protected $fillable = ['nama_satuan_kerja' , 'parent_unit'];
    public function pegawai(){
		return $this->hasMany('App\pegawai','id_satuan_kerja');
	}

	
}

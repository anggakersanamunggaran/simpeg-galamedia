<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    protected $table = 'tbl_master_unit_kerja';
    protected $fillable = ['nama_unit_kerja','eselon','parent_unit'];
   
	public function Pegawai(){
		return $this->hasOne('pegawai','id_unit_kerja');
	}



	
}

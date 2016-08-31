<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eselon extends Model
{
    protected $table = 'tbl_master_eselon';
    protected $fillable = ['nama_eselon', 'level'];
    public function pegawai(){
		return $this->hasOne('pegawai','id_eselon');
	}


}

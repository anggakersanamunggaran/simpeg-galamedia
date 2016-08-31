<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusJabatan extends Model
{
    protected $table = 'tbl_master_status_jabatan';
    protected $fillable = ['nama_jabatan' ];
    public function Pegawai(){
		return $this->hasOne('pegawai','id_status_jabatan');
	}
}

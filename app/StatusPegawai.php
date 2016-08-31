<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPegawai extends Model
{
    protected $table = 'tbl_master_status_pegawai';
    protected $fillable = ['nama_status'];

    public function Pegawai(){
		return $this->hasMany('pegawai','id_status_pegawai');
	}
}

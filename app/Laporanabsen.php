<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporanabsen extends Model
{
     public $timestamps = false;
     protected $table = 'tbl_data_tunjangan';
   	 protected $fillable = ['id_pegawai','id_kehadiran','tanggal_absen'];


}

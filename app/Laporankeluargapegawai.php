<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporankeluargapegawai extends Model
{
  protected $table = 'tbl_data_keluarga';
  protected $fillable = ['nama_anggota_keluarga','tanggal_nikah','tanggal_cerai_meninggal','uraian','jumlah_anggota'];

   public function pegawai(){
   return $this->belongsTo('App\Pegawai','id_pegawai');
  }
}

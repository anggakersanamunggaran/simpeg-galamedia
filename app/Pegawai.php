<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'tbl_data_pegawai';
    protected $fillable = ['id_status_jabatan','id_jabatan','id_unit_kerja','id_satuan_kerja','id_golongan','id_eselon','nip','nama_pegawai','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','usia','status_pegawai','tanggal_pengangkatan',
    'alamat','no_npwp','status_pegawai_pangkat','nomor_sk_pangkat','tanggal_sk_pangkat','tanggal_mulai_pangkat','tanggal_selesai_pangkat',
    'lokasi_kerja','nomor_sk_jabatan','tanggal_sk_jabatan','tanggal_mulai_jabatan','tanggal_selesai_jabatan','tmt_eselon','foto',
    'nilai_tunjangan','email'];

    public function golongan(){
		return $this->belongsTo('App\Golongan','id_golongan');
	}


	public function satuankerja(){
		return $this->belongsTo('App\satuankerja','id_satuan_kerja');
	}



	public function jabatan(){
		return $this->belongsTo('App\jabatan','id_jabatan');
	}

	public function statusJabatan(){
		return $this->belongsTo('App\statusjabatan','id_status_jabatan');
	}



	public function statuspegawai(){
		return $this->belongsTo('App\StatusPegawai','id_status_pegawai');
	}

	public function kehadiran(){
		return $this->belongsToMany('App\Kehadiran','tbl_data_tunjangan','id_pegawai','id_kehadiran')
		->withPivot('tanggal_absen','id','id_kehadiran')
		->orderBy('pivot_tanggal_absen')
		->get();

	}

  public function laporankeluargapegawai(){
    return $this->hasOne('App\laporankeluargapegawai' ,'id_pegawai');
  }
}

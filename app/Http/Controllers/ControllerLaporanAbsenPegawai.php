<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerLaporanAbsenPegawai extends Controller
{
  public function laporanabsen(){

      $pegawais = Pegawai::orderBy('nama_pegawai')->get();
      return view('laporan.pegawai.absen.index', ['pegawais' => $pegawais]);

  }

  public function semualaporanabsen(){
    $pegawai = Pegawai::orderBy('nama_pegawai')->get();
    return view('laporan.pegawai.sortdate',['pegawai' => $pegawai]);
  }
}

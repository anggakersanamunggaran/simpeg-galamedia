<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pegawai;
use App\Laporankeluargapegawai;
class ControllerDataKeluarga extends Controller
{
  public function index(){
        $pegawais = Laporankeluargapegawai::orderBy('id_pegawai')->get();
        return view('laporan.pegawai.datakeluarga.index', ['pegawais' => $pegawais]);

    }

  public function create(){
      $pegawai = Pegawai::all();

      return view('laporan.pegawai.datakeluarga.create', compact('pegawai'));
  }

  public function directcreate($id){
      $pegawai = Pegawai::find($id);

        if($pegawai->status_marital ==="Belum Menikah"){

        return redirect('pegawai/'. $pegawai->id)->with('message','Pegawai Belum Menikah tidak bisa diupdate');

      }
      return view('laporan.pegawai.datakeluarga.directcreate', compact('pegawai'));
  }



  public function store(Request $request){

        $this->validate($request, array(

                'id_pegawai'   => 'required|integer',
                'tanggal_nikah' => 'required|string',
                'jumlah_anggota' => 'required',
                'nama_anggota_keluarga'=> 'required'
            ));

        // store in the database
        $post = new Laporankeluargapegawai;


        $post->id_pegawai = $request->id_pegawai;
        $post->tanggal_nikah = $request->tanggal_nikah;
        $post->jumlah_anggota = $request->jumlah_anggota;
        $post->nama_anggota_keluarga = $request->nama_anggota_keluarga;
        if ($request->has('tanggal_cerai_meninggal')) {
            $post->tanggal_cerai_meninggal = $request->tanggal_cerai_meninggal;
        }else {
            $post->tanggal_cerai_meninggal = 'Kosong';
        }

        $post->save();



         return redirect('datakeluarga')->with('message','Data Berhasil Dihapus');

  }

  public function show($id){

      $pegawai = Laporankeluargapegawai::find($id);
      return view('laporan.pegawai.datakeluarga.show',['pegawai'=>$pegawai]);
  }


  public function destroy($id){
    $hapus=Laporankeluargapegawai::find($id);

    $hapus->delete();

      return redirect('datakeluarga')->with('message','Data Berhasil Dihapus');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Pegawai;
use App\Laporanabsen;
use App\Kehadiran;

class ControllerLaporanTunjangan extends Controller
{
   public function index($id){


        $pegawai = Pegawai::find($id);

        $count_total = Laporanabsen::where([
            ['id_pegawai', $id],
            ['id_kehadiran', '1'],
        ])->whereMonth( 'tanggal_absen', '=', Carbon::now()->month    )
        ->count('id_pegawai');
        return view('laporan.tunjangan.index', ['pegawai' => $pegawai],['count_total' => $count_total]);

    }

    public function create($id){

        $pegawai = Pegawai::find($id);

        $kehadiran = Kehadiran::all();

    	return view('laporan.tunjangan.create',compact('pegawai','kehadiran'));


    }

    public function store(Request $request){

        $this->validate($request, array(

                'id_pegawai'   => 'required|integer',
                'id_kehadiran'   => 'required|integer',
                'tanggal_absen' => 'required|string'
            ));

        // store in the database
        $post = new Laporanabsen;


        $post->id_pegawai = $request->id_pegawai;
        $post->id_kehadiran = $request->id_kehadiran;
        $post->tanggal_absen = $request->tanggal_absen;

        $post->save();



         return redirect('tunjangan/'.$post->id_pegawai.'/index');
    }

    

    public function edit($id){
        $pegawai = Pegawai::all();
        $kehadiran = kehadiran::find($id);
        return view('tunjangan.edit',compact('pegawai','kehadiran'));
    }

      public function update(Request $request,$id)
    {
        //validate
        $this->validate($request, array(

                'id_pegawai'   => 'required|integer',
                'id_kehadiran'   => 'required|integer',

            ));

        // store in the database
        $post = new Laporanabsen;


        $post->id_pegawai = $request->id_pegawai;
        $post->id_kehadiran = $request->id_kehadiran;

        $post->save();

        return redirect('tunjangan/'.$post->id_pegawai.'/index')->with('message', 'Data berhasil dirubah!');
    }

    public function destroy($id){
    	$hapus=Laporanabsen::find($id);
      $index=$hapus->id_pegawai;
      $hapus->delete();

        return redirect('tunjangan/'.$index.'/index')->with('message','Data Berhasil Dihapus');
    }
}

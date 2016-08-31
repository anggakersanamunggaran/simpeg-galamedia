<?php

namespace App\Http\Controllers;
use App\StatusPegawai;
use App\Pegawai;

use App\Golongan;
use App\SatuanKerja;
use App\Jabatan;
use App\StatusJabatan;



use Image;
use DB;
use Storage;
use Session;

use Illuminate\Http\Request;


class ControllerPegawai extends Controller
{

  //Laporan Absen Controllers
  public function laporanabsen(){

      $pegawais = Pegawai::orderBy('nama_pegawai')->get();
      return view('laporan.pegawai.absen.index', ['pegawais' => $pegawais]);

  }

    public function index(){

        $pegawais = Pegawai::orderBy('nama_pegawai')->get();
        return view('pegawai.index', ['pegawais' => $pegawais]);

    }

    public function create(){
        $statusjabatan = StatusJabatan::all();
        $jabatan = Jabatan::all();
        $pegawai = Pegawai::all();
        $golongan = Golongan::all();
        $satuan_kerja = SatuanKerja::all();
        $statuspegawai = StatusPegawai::all();
    	return view('pegawai.create',compact('statusjabatan','satuan_kerja','golongan','statuspegawai'))
        ->withPegawai($pegawai)
        ->withJabatan($jabatan);
    }

    public function store(Request $request){

        $this->validate($request, array(
                'nip'         => 'required|max:255',
                'nama_pegawai'          => 'required',
                'id_status_jabatan'   => 'required|integer',
                'id_jabatan'   => 'required|integer',
                'id_golongan'   => 'required|integer',
                'id_satuan_kerja'   => 'required|integer',
                'id_status_pegawai'=>'required'
            ));

        // store in the database
        $post = new Pegawai;

        $post->nip = $request->nip;
        $post->nama_pegawai = $request->nama_pegawai;
        $post->id_status_jabatan = $request->id_status_jabatan;
        $post->id_jabatan = $request->id_jabatan;
        $post->id_golongan = $request->id_golongan;
        $post->id_satuan_kerja = $request->id_satuan_kerja;
        $post->tunjangan_makan = $request->tunjangan_makan;
        $post->tunjangan_transport = $request->tunjangan_transport;
        $post->id_status_pegawai = $request->id_status_pegawai;
        $post->agama = $request->agama;
        $post->usia = $request->usia;
        $post->tempat_lahir = $request->tempat_lahir;
        $post->tanggal_lahir = $request->tanggal_lahir;
        $post->jenis_kelamin = $request->jenis_kelamin;
        $post->tanggal_pengangkatan = $request->tanggal_pengangkatan;
        $post->alamat = $request->alamat;
        $post->status_pegawai_pangkat = $request->status_pegawai_pangkat;
        $post->gaji_pokok = $request->gaji_pokok;
        $post->nomor_telepon = $request->nomor_telepon;
        $post->status_marital = $request->status_marital;
        $post->email = $request->email;


        //save our images
        if( $request->hasFile('featured_image') ){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('photo/' . $filename);
            Image::make($image) ->resize(800,400)->save($location);

            $post->foto = $filename;

        }



        $post->save();



        return redirect('pegawai')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){

    	 $pegawai = Pegawai::find($id);

        return view('pegawai.show',compact('pegawai'));
    }

    public function edit($id){
        $pegawai = Pegawai::find($id);
        $statusjabatan = StatusJabatan::all();
        $jabatan = Jabatan::all();

        $golongan = Golongan::all();
        $satuan_kerja = SatuanKerja::all();

        $statuspegawai = StatusPegawai::all();

        return view('pegawai.edit',compact('pegawai','jabatan','statusjabatan','golongan','satuan_kerja',
            'statuspegawai'));
    }

      public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                 'nip'         => 'required|max:255',
                'nama_pegawai'          => 'required',
                'id_status_jabatan'   => 'required|integer',
                'id_jabatan'   => 'required|integer',
                'id_golongan'   => 'required|integer',
                'id_satuan_kerja'   => 'required|integer',
                'id_status_pegawai'=>'required'



            ));
         //save the data into DB
        $post = Pegawai::find($id);

        $post->nip = $request->nip;
        $post->nama_pegawai = $request->nama_pegawai;
        $post->id_status_jabatan = $request->id_status_jabatan;
        $post->id_jabatan = $request->id_jabatan;
        $post->id_golongan = $request->id_golongan;
        $post->id_satuan_kerja = $request->id_satuan_kerja;
        $post->tunjangan_makan = $request->tunjangan_makan;
        $post->tunjangan_transport = $request->tunjangan_transport;
        $post->id_status_pegawai = $request->id_status_pegawai;
        $post->agama = $request->agama;
        $post->usia = $request->usia;
        $post->tempat_lahir = $request->tempat_lahir;
        $post->tanggal_lahir = $request->tanggal_lahir;
        $post->jenis_kelamin = $request->jenis_kelamin;
        $post->tanggal_pengangkatan = $request->tanggal_pengangkatan;
        $post->alamat = $request->alamat;
        $post->status_pegawai_pangkat = $request->status_pegawai_pangkat;
        $post->gaji_pokok = $request->gaji_pokok;
        $post->nomor_telepon = $request->nomor_telepon;
        $post->status_marital = $request->status_marital;
        $post->email = $request->email;

        $post->status_pegawai_pangkat = $request->status_pegawai_pangkat;



        $post->gaji_pokok = $request->gaji_pokok;



         if( $request->hasFile('featured_image') ){
             $image = $request->file('featured_image');
             $filename = time() . '.' . $image->getClientOriginalExtension();
             $location = public_path('photo/' . $filename);
             Image::make($image) ->resize(800,400)->save($location);
             $oldFilename = $post->foto;
            //update into database
             $post->foto = $filename;
            //delete oldfile
             Storage::delete($oldFilename);
        }


        $post->save();

        return redirect('pegawai')->with('message', 'Data berhasil dirubah!');
    }

    public function destroy($id){
    	$pegawai = Pegawai::find($id);
        Storage::delete($pegawai->foto);
        $pegawai->delete();
        Session::flash('message','Data Berhasil Dihapus');
        return redirect('pegawai');
    }




}

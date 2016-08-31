<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RequestLokasiPelatihan;
use App\LokasiPelatihan;

class ControllerLokasiPelatihan extends Controller
{   
     public function index(){
    	$lokasipelatihan = LokasiPelatihan::orderBy('id')->limit(4)->get();

        return view('master.lokasipelatihan.index', compact('lokasipelatihan'))->withPost('$lokasipelatihan');
    }

    public function create(){
        
    	return view('master.lokasipelatihan.create');
    }

    public function store(RequestLokasiPelatihan $request){
    	LokasiPelatihan::create($request->all());
        return redirect('lokasipelatihan')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$lokasipelatihan = LokasiPelatihan::find($id);
        return view('master.lokasipelatihan.show',compact('lokasipelatihan'))->withPost($lokasipelatihan);
    }

    public function edit($id){
    	$lokasipelatihan = LokasiPelatihan::find($id);
        return view('master.lokasipelatihan.edit',compact('lokasipelatihan'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_lokasi' => 'required|max:255',
                'level'=>'required'

                  
               
            ));
         //save the data into DB
        $lokasipelatihan = LokasiPelatihan::find($id);
        
        $lokasipelatihan->nama_lokasi = $request->input('nama_lokasi');

        $lokasipelatihan->save();

        return redirect('lokasipelatihan')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	LokasiPelatihan::find($id)->delete();
        return redirect('lokasipelatihan')->with('message','Data Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pelatihan;

class ControllerPelatihan extends Controller
{   
      public function index(){
    	$pelatihan = Pelatihan::orderBy('id')->limit(4)->get();

        return view('master.pelatihan.index', compact('pelatihan'))->withPost('$pelatihan');
    }

    public function create(){
        
    	return view('master.pelatihan.create');
    }

    public function store(Request $request){

    	$this->validate($request, array(
    		'nama_pelatihan' => 'required',
    		'level' => 'required'
    		));
    	
    	Pelatihan::create($request->all());
        return redirect('pelatihan')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$pelatihan = Pelatihan::find($id);
        return view('master.pelatihan.show',compact('pelatihan'))->withPost($pelatihan);
    }

    public function edit($id){
    	$pelatihan = Pelatihan::find($id);
        return view('master.pelatihan.edit',compact('pelatihan'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_lokasi' => 'required|max:255',
                'level'=>'required'

                  
               
            ));
         //save the data into DB
        $pelatihan = Pelatihan::find($id);
        
        $pelatihan->nama_lokasi = $request->input('nama_lokasi');
        $pelatihan->level = $request->input('level');

        $lokasipelatihan->save();

        return redirect('pelatihan')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	Pelatihan::find($id)->delete();
        return redirect('pelatihan')->with('message','Data Berhasil Dihapus');
    }
}

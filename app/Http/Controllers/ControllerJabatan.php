<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RequestJabatan;
use App\Jabatan;

class ControllerJabatan extends Controller
{   
     public function index(){
    	$jabatan = Jabatan::orderBy('id')->limit(4)->get();

        return view('master.jabatan.index', compact('jabatan'))->withPost('$jabatan');
    }

    public function create(){
        
    	return view('master.jabatan.create');
    }

    public function store(RequestJabatan $request){
    	Jabatan::create($request->all());
        return redirect('jabatan')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$jabatan = Jabatan::find($id);
        return view('master.jabatan.show',compact('jabatan'))->withPost($jabatan);
    }

    public function edit($id){
    	$jabatan = Jabatan::find($id);
        return view('master.jabatan.edit',compact('jabatan'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_jabatan' => 'required|max:255',
                'level'=>'required'

                  
               
            ));
         //save the data into DB
        $jabatan = Jabatan::find($id);
        
        $jabatan->nama_jabatan = $request->input('nama_jabatan');

        $jabatan->save();

        return redirect('jabatan')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	Hukuman::find($id)->delete();
        return redirect('jabatan')->with('message','Data Berhasil Dihapus');
    }
}

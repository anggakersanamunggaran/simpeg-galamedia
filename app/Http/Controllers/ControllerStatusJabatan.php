<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\StatusJabatan;

class ControllerStatusJabatan extends Controller
{
     public function index(){
    	$statusjabatan = StatusJabatan::orderBy('id')->limit(4)->get();

        return view('master.statusjabatan.index', compact('statusjabatan'))->withPost('$statusjabatan');
    }

    public function create(){
        
    	return view('master.statusjabatan.create');
    }

    public function store(Request $request){

    	$this->validate($request, array(
    		'nama_jabatan' => 'required',
    		
    		));
    	
    	StatusJabatan::create($request->all());
        return redirect('statusjabatan')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$statusjabatan = StatusJabatan::find($id);
        return view('master.statusjabatan.show',compact('statusjabatan'))->withPost($statusjabatan);
    }

    public function edit($id){
    	$statusjabatan = StatusJabatan::find($id);
        return view('master.statusjabatan.edit',compact('statusjabatan'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_jabatan' => 'required|max:255',
                

                  
               
            ));
         //save the data into DB
        $statusjabatan = StatusJabatan::find($id);
        
        $statusjabatan->nama_jabatan = $request->input('nama_jabatan');
        

        $statusjabatan->save();

        return redirect('statusjabatan')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	StatusJabatan::find($id)->delete();
        return redirect('statusjabatan')->with('message','Data Berhasil Dihapus');
    }
}

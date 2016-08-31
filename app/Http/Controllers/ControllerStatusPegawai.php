<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\StatusPegawai;
class ControllerStatusPegawai extends Controller
{
   public function index(){
    	$statuspegawai = StatusPegawai::orderBy('id')->limit(4)->get();

        return view('master.statuspegawai.index', compact('statuspegawai'))->withPost('$statuspegawai');
    }

    public function create(){
        
    	return view('master.statuspegawai.create');
    }

    public function store(Request $request){

    	$this->validate($request, array(
    		'nama_status' => 'required',
    		
    		));
    	
    	StatusPegawai::create($request->all());
        return redirect('statuspegawai')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$statuspegawai = StatusPegawai::find($id);
        return view('master.statuspegawai.show',compact('statuspegawai'))->withPost($statuspegawai);
    }

    public function edit($id){
    	$statuspegawai = StatusPegawai::find($id);
        return view('master.statuspegawai.edit',compact('statuspegawai'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_status' => 'required|max:255',
                

                  
               
            ));
         //save the data into DB
        $statuspegawai = StatusPegawai::find($id);
        
        $statuspegawai->nama_status = $request->input('nama_status');
        

        $statuspegawai->save();

        return redirect('statuspegawai')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	StatusPegawai::find($id)->delete();
        return redirect('statuspegawai')->with('message','Data Berhasil Dihapus');
    }
}

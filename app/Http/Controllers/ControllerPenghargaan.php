<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Penghargaan;

class ControllerPenghargaan extends Controller
{
     public function index(){
    	$penghargaan = Penghargaan::orderBy('id')->limit(4)->get();

        return view('master.penghargaan.index', compact('penghargaan'))->withPost('$penghargaan');
    }

    public function create(){
        
    	return view('master.penghargaan.create');
    }

    public function store(Request $request){

    	$this->validate($request, array(
    		'nama_penghargaan' => 'required',
    		
    		));
    	
    	Penghargaan::create($request->all());
        return redirect('penghargaan')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$penghargaan = Penghargaan::find($id);
        return view('master.penghargaan.show',compact('penghargaan'))->withPost($penghargaan);
    }

    public function edit($id){
    	$penghargaan = Penghargaan::find($id);
        return view('master.penghargaan.edit',compact('penghargaan'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_penghargaan' => 'required|max:255',
                

                  
               
            ));
         //save the data into DB
        $penghargaan = Penghargaan::find($id);
        
        $penghargaan->nama_penghargaan = $request->input('nama_penghargaan');
        

        $penghargaan->save();

        return redirect('penghargaan')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	Penghargaan::find($id)->delete();
        return redirect('penghargaan')->with('message','Data Berhasil Dihapus');
    }
}

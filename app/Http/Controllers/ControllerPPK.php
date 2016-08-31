<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PPK;

class ControllerPPK extends Controller
{
    public function index(){
    	$ppk = PPK::orderBy('id')->limit(4)->get();

        return view('master.ppk.index', compact('ppk'))->withPost('$ppk');
    }

    public function create(){
        
    	return view('master.ppk.create');
    }

    public function store(Request $request){

    	$this->validate($request, array(
    		'nama_ppk' => 'required',
    		'parents_satuan_kerja' => 'required'
    		));
    	
    	PPK::create($request->all());
        return redirect('ppk')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$ppk = PPK::find($id);
        return view('master.ppk.show',compact('ppk'))->withPost($ppk);
    }

    public function edit($id){
    	$ppk = PPK::find($id);
        return view('master.ppk.edit',compact('ppk'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_ppk' => 'required|max:255',
                'parents_satuan_kerja' => 'required'

                  
               
            ));
         //save the data into DB
        $ppk = PPK::find($id);
        
        $ppk->nama_ppk = $request->input('nama_ppk');
        $ppk->parents_satuan_kerja = $request->input('parents_satuan_kerja');

        $ppk->save();

        return redirect('ppk')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	PPK::find($id)->delete();
        return redirect('ppk')->with('message','Data Berhasil Dihapus');
    }
}

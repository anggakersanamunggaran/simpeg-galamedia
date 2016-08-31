<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RequestSatuanKerja;

use App\SatuanKerja;

class ControllerSatuanKerja extends Controller
{   
    public function index(){
    	$satuankerja = SatuanKerja::orderBy('id')->limit(4)->get();

        return view('master.satuankerja.index', compact('satuankerja'))->withPost('$satuankerja');
    }

    public function create(){
        
    	return view('master.satuankerja.create');
    }

    public function store(RequestSatuanKerja $request){
    	SatuanKerja::create($request->all());
        return redirect('satuankerja')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$satuankerja = SatuanKerja::find($id);
        return view('master.satuankerja.show',compact('satuankerja'))->withPost($satuankerja);
    }

    public function edit($id){
    	$satuankerja = SatuanKerja::find($id);
        return view('master.satuankerja.edit',compact('satuankerja'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_satuan_kerja' => 'required|max:255',
                'parent_unit'  => 'required'  
               
            ));
         //save the data into DB
        $satuankerja = SatuanKerja::find($id);
        
        $satuankerja->nama_satuan_kerja = $request->input('nama_satuan_kerja');
        $satuankerja->parent_unit = $request->input('parent_unit');

        $eselon->save();

        return redirect('satuankerja')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	SatuanKerja::find($id)->delete();
        return redirect('satuankerja')->with('message','Data Berhasil Dihapus');
    }
}

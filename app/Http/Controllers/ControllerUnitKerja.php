<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UnitKerja;

class ControllerUnitKerja extends Controller
{
     public function index(){
    	$unitkerja = UnitKerja::orderBy('id')->limit(4)->get();

        return view('master.unitkerja.index', compact('unitkerja'))->withPost('$unitkerja');
    }

    public function create(){
        
    	return view('master.unitkerja.create');
    }

    public function store(Request $request){

    	$this->validate($request, array(
    		'nama_unit_kerja' => 'required',
    		'eselon' => 'required',
            'parent_unit' => 'required'
    		));
    	
    	UnitKerja::create($request->all());
        return redirect('unitkerja')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$unitkerja = UnitKerja::find($id);
        return view('master.unitkerja.show',compact('unitkerja'))->withPost($unitkerja);
    }

    public function edit($id){
    	$unitkerja = UnitKerja::find($id);
        return view('master.unitkerja.edit',compact('unitkerja'));

    }

    public function update(Request $request,$id)
    {
        //validate
        
        $this->validate($request, array(
            'nama_unit_kerja' => 'required',
            'eselon' => 'required',
            'parent_unit' => 'required'
            ));
         //save the data into DB
        $unitkerja = UnitKerja::find($id);
        
        $unitkerja->nama_unit_kerja = $request->input('nama_unit_kerja');
        $unitkerja->eselon = $request->input('eselon');
        $unitkerja->parent_unit = $request->input('parent_unit');

        $unitkerja->save();

        return redirect('unitkerja')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	UnitKerja::find($id)->delete();
        return redirect('unitkerja')->with('message','Data Berhasil Dihapus');
    }
}

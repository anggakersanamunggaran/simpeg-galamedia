<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Golongan;
use App\Http\Requests\RequestGolongan;

class ControllerGolongan extends Controller
{
   

     public function index(){
    	$golongan = Golongan::orderBy('id')->limit(4)->get();

        return view('master.golongan.index', compact('golongan'))->withPost('$golongan');
    }

    public function create(){
        
    	return view('master.golongan.create');
    }

    public function store(RequestGolongan $request){
    	Golongan::create($request->all());
        return redirect('golongan')->with('message','Data Berhasil Disimpan');
    }

    public function show($id_golongan){
    	$golongan = Golongan::find($id_golongan);
        return view('master.golongan.show',compact('golongan'))->withPost($golongan);
    }

    public function edit($id){
    	$golongan = Golongan::find($id);
        return view('master.golongan.edit',compact('golongan'));
    }

     public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'golongan' => 'required|max:255',
                'uraian' => 'required|max:255',
                'level'  => 'required'  
               
            ));
         //save the data into DB
        $golongan = Golongan::find($id);
        
        $golongan->golongan = $request->input('golongan');
        $golongan->uraian = $request->input('uraian');
        $golongan->level = $request->input('level');

        $golongan->save();

        return redirect('golongan')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	Golongan::find($id)->delete();
        return redirect('golongan')->with('message','Data Berhasil Dihapus');
    }
}

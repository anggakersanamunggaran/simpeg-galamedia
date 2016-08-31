<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Eselon;
use App\Http\Requests\RequestEselon;
use App\Http\Requests;


class ControllerEselon extends Controller
{


   public function index(){

    	$eselon = Eselon::orderBy('id')->limit(4)->get();

        return view('master.eselon.index', compact('eselon'))->withPost('$eselon');
    }

    public function create(){

    	return view('master.eselon.create');
    }

    public function store(RequestEselon $request){
    	  Eselon::create($request->all());
        return redirect('eselon')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$eselon = Eselon::find($id);
        return view('master.eselon.show',compact('eselon'))->withPost($eselon);
    }

    public function edit($id){
    	$eselon = Eselon::find($id);
        return view('master.eselon.edit',compact('eselon'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_eselon' => 'required|max:255',
                'level'  => 'required'

            ));
         //save the data into DB
        $eselon = Eselon::find($id);

        $eselon->nama_eselon = $request->input('nama_eselon');
        $eselon->level = $request->input('level');

        $eselon->save();

        return redirect('eselon')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	Eselon::find($id)->delete();
        return redirect('eselon')->with('message','Data Berhasil Dihapus');
    }
}

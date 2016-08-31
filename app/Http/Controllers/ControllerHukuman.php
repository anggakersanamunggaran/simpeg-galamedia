<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RequestHukuman;
use App\Hukuman;

class ControllerHukuman extends Controller
{   
      public function index(){
    	$hukuman = Hukuman::orderBy('id')->limit(4)->get();

        return view('master.hukuman.index', compact('hukuman'))->withPost('$hukuman');
    }

    public function create(){
        
    	return view('master.hukuman.create');
    }

    public function store(RequestHukuman $request){
    	Hukuman::create($request->all());
        return redirect('hukuman')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$hukuman = Hukuman::find($id);
        return view('master.hukuman.show',compact('hukuman'))->withPost($hukuman);
    }

    public function edit($id){
    	$hukuman = Hukuman::find($id);
        return view('master.hukuman.edit',compact('hukuman'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'nama_hukuman' => 'required|max:255',
                  
               
            ));
         //save the data into DB
        $hukuman = Hukuman::find($id);
        
        $hukuman->nama_hukuman = $request->input('nama_hukuman');

        $hukuman->save();

        return redirect('hukuman')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	Hukuman::find($id)->delete();
        return redirect('hukuman')->with('message','Data Berhasil Dihapus');
    }
}

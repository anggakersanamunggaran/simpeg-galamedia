<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kehadiran;
use App\Http\Requests;
use App\Http\Requests\RequestKehadiran;


class ControllerKehadiran extends Controller
{   
    public function index(){
    	$kehadiran = Kehadiran::orderBy('id')->limit(4)->get();

        return view('master.kehadiran.index', compact('kehadiran'))->withPost('$kehadiran');
    }

    public function create(){
        
    	return view('master.kehadiran.create');
    }

    public function store(RequestKehadiran $request){
    	Kehadiran::create($request->all());
        return redirect('kehadiran')->with('message','Data Berhasil Disimpan');
    }

    public function show($id){
    	$kehadiran = Kehadiran::find($id);
        return view('master.kehadiran.show',compact('kehadiran'))->withPost($kehadiran);
    }

    public function edit($id){
    	$kehadiran = Kehadiran::find($id);
        return view('master.kehadiran.edit',compact('kehadiran'));

    }

    public function update(Request $request,$id)
    {
        //validate
         $this->validate($request, array(
                'status_kehadiran' => 'required|max:255',
                  
               
            ));
         //save the data into DB
        $kehadiran = Kehadiran::find($id);
        
        $kehadiran->status_kehadiran = $request->input('status_kehadiran');

        $kehadiran->save();

        return redirect('kehadiran')->with('message', 'Data berhasil dirubah!');
    }


    public function destroy($id){
    	Hukuman::find($id)->delete();
        return redirect('kehadiran')->with('message','Data Berhasil Dihapus');
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlewareGroups' => ['web']], function () {


Route::get('/', function () {
    return view('welcome');
});



Route::auth();

Route::get('/home', 'HomeController@index');

//Pegawai
Route::resource('pegawai','ControllerPegawai');
//Laporan Absen
Route::get('laporanabsen','ControllerPegawai@laporanabsen');
Route::get('semualaporanabsen','ControllerPegawai@semualaporanabsen');

//Route::post('pegawai/{id}/tunjangan',
//[
//'uses' => '\App\Http\Controllers\ControllerLaporanTunjangan@index',
//'as' => 'id',
//]);

//Golongan
Route::resource('golongan','ControllerGolongan');
//Eselon
Route::resource('eselon','ControllerEselon');
//SatuanKerja
Route::resource('satuankerja','ControllerSatuanKerja');

//Hukuman
Route::resource('hukuman','ControllerHukuman');
//Jabatan
Route::resource('jabatan','ControllerJabatan');
//Kehadiran
Route::resource('kehadiran','ControllerKehadiran');
//LokasiPelatihan
Route::resource('lokasipelatihan','ControllerLokasiPelatihan');
//Pelatihan
Route::resource('pelatihan','ControllerPelatihan');
//Penghargaan
Route::resource('penghargaan','ControllerPenghargaan');
//Master PPK
Route::resource('ppk','ControllerPPK');
//Master Status Pegawai
Route::resource('statuspegawai','ControllerStatusPegawai');
//Master Status Jabatan
Route::resource('statusjabatan','ControllerStatusJabatan');
//Master Unit Kerja
Route::resource('unitkerja','ControllerUnitKerja');

//Laporan TunjanganPegawai
Route::resource('tunjangan','ControllerLaporanTunjangan');
Route::get('tunjangan/{id}/index','ControllerLaporanTunjangan@index');
Route::get('tunjangan/{id}/create','ControllerLaporanTunjangan@create');

//Data Keluarga Pegawai
Route::resource('datakeluarga','ControllerDataKeluarga');
Route::get('datakeluarga/{id}/create','ControllerDataKeluarga@directcreate');
});

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datapegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_data_pegawai', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_status_jabatan')->unsigned();
            $table->integer('id_jabatan')->unsigned();
            $table->integer('id_unit_kerja')->unsigned();
            $table->integer('id_satuan_kerja')->unsigned();
            $table->integer('id_golongan')->unsigned();
            $table->integer('id_eselon')->unsigned();
            $table->integer('id_tumt')->unsigned();
            $table->string('nip');
            $table->string('nip_lama');
            $table->string('no_kartu_pegawai');
            $table->string('nama_pegawai');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir'); 
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('usia',3);
            $table->string('status_pegawai');
            $table->string('tanggal_pengangkatan');
            $table->string('alamat');
            $table->string('no_npwp');
            $table->string('status_pegawai_pangkat');            
            $table->string('nomor_sk_pangkat');        
            $table->string('tanggal_sk_pangkat');
            $table->string('tanggal_mulai_pangkat');
            $table->string('tanggal_selesai_pangkat');           
            $table->string('lokasi_kerja');
            $table->string('nomor_sk_jabatan');
            $table->string('tanggal_sk_jabatan');
            $table->string('tanggal_mulai_jabatan');
            $table->string('tanggal_selesai_jabatan');            
            $table->string('tmt_eselon');
            $table->string('foto');            
            $table->string('nilai_tunjangan');
            $table->timestamps();
        });
        
        Schema::table('tbl_data_pegawai',function($table){

            $table->foreign('id_status_jabatan')->references('id')->on('tbl_master_status_jabatan');
            $table->foreign('id_jabatan')->references('id')->on('tbl_master_jabatan');
            $table->foreign('id_unit_kerja')->references('id')->on('tbl_master_unit_kerja');
            $table->foreign('id_satuan_kerja')->references('id')->on('tbl_master_satuan_kerja');
            $table->foreign('id_golongan')->references('id')->on('tbl_master_golongan');
            $table->foreign('id_eselon')->references('id')->on('tbl_master_eselon');
            $table->foreign('id_tumt')->references('id')->on('tbl_master_tumt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_data_pegawai');
    }
}

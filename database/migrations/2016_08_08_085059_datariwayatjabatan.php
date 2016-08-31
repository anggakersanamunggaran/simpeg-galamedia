<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datariwayatjabatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_riwayat_jabatan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();
            $table->integer('id_unit_kerja')->unsigned(); 
            $table->integer('id_jabatan')->unsigned();
            $table->integer('id_eselon')->unsigned();                  
            $table->text('uraian');         
            $table->string('status');
            $table->string('penempatan');
            $table->string('tmt_eselon');
            $table->string('nomor_sk');
            $table->string('tanggal_sk');
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');
            $table->timestamps();
        });

         Schema::table('tbl_data_riwayat_jabatan',function($table){

            $table->foreign('id_pegawai')->references('id')->on('tbl_data_pegawai');
            $table->foreign('id_jabatan')->references('id')->on('tbl_master_jabatan');
            $table->foreign('id_unit_kerja')->references('id')->on('tbl_master_unit_kerja');
            $table->foreign('id_eselon')->references('id')->on('tbl_master_eselon');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_data_riwayat_jabatan');
    }
    
}

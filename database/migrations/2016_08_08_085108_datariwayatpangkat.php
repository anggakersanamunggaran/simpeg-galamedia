<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datariwayatpangkat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_riwayat_pangkat', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();        
            $table->string('status');
            $table->string('nomor_sk');
            $table->integer('id_golongan')->unsigned();
            $table->string('tanggal_sk');
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');
            $table->string('masa_kerja');           
            $table->timestamps();
        });

        Schema::table('tbl_data_riwayat_pangkat',function($table){

            $table->foreign('id_pegawai')->references('id')->on('tbl_data_pegawai');
            $table->foreign('id_golongan')->references('id')->on('tbl_master_golongan');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_data_riwayat_pangkat');
    }
}

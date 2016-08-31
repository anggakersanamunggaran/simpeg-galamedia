<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datatunjangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_tunjangan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();
            $table->integer('id_kehadiran')->unsigned();
            $table->integer('id_tumt')->unsigned();                    
            $table->string('nama_pegawai');
            $table->string('nilai_tumt');
            $table->string('kode_tumt');
            $table->string('golongan');
            $table->string('status_absen');
            $table->string('jumlah_hadir');                    
            $table->timestamps();
        });

         Schema::table('tbl_data_tunjangan',function($table){

            $table->foreign('id_pegawai')->references('id')->on('tbl_data_pegawai');
            $table->foreign('id_kehadiran')->references('id')->on('tbl_master_kehadiran');
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
        Schema::drop('tbl_data_tunjangan');
    }
}

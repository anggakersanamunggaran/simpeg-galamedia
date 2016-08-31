<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datapenghargaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_data_penghargaan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();
            $table->integer('id_master_penghargaan')->unsigned();        
            $table->text('uraian');         
            $table->string('nomor_sk');
            $table->string('teknik_non_teknik');
            $table->string('tanggal_sk');
            $table->string('sekolah');
            $table->string('tempat_sekolah');
            $table->string('no_sttb');
            $table->string('tanggal_sttb');
            $table->string('tanggal_lulus');
            $table->timestamps();
        });

         Schema::table('tbl_data_penghargaan',function($table){

            $table->foreign('id_pegawai')->references('id')->on('tbl_data_pegawai');
            $table->foreign('id_master_penghargaan')->references('id')->on('tbl_master_penghargaan');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_data_penghargaan');
    }
}

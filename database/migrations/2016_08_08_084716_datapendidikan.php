<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datapendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_pendidikan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();        
            $table->text('uraian');         
            $table->string('tingkat_pendidikan');
            $table->string('jurusan');
            $table->string('teknik_non_teknik');
            $table->string('sekolah');
            $table->string('tempat_sekolah');
            $table->string('no_sttb');
            $table->string('tanggal_sttb');
            $table->string('tanggal_lulus');
            $table->timestamps();
        });

         Schema::table('tbl_data_pendidikan',function($table){

            $table->foreign('id_pegawai')->references('id')->on('tbl_data_pegawai');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_data_pendidikan');
    }
}

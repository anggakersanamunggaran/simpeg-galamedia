<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datakeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_data_keluarga', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();            
            $table->string('nama_anggota_keluarga');
            $table->string('tanggal_lahir');
            $table->string('status_kawin');
            $table->string('tanggal_nikah');           
            $table->text('uraian');
            $table->string('tanggal_cerai_meninggal');             
            $table->string('pekerjaan');           
            $table->timestamps();
        });

         Schema::table('tbl_data_keluarga',function($table){

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
       Schema::drop('tbl_data_keluarga');
    }
}

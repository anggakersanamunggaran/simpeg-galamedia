<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datahukuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_hukuman', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();
            $table->integer('id_master_hukuman')->unsigned();
            $table->string('uraian');
            $table->string('nomor_sk');
            $table->string('tanggal_sk');
            $table->string('masa_berlaku');           
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');             
            $table->string('pejabat_menetapkan');           
            $table->timestamps();
        });

        Schema::table('tbl_data_hukuman',function($table){

            $table->foreign('id_pegawai')->references('id')->on('tbl_data_pegawai');
            $table->foreign('id_master_hukuman')->references('id')->on('tbl_master_hukuman');
         
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_data_hukuman');
    }
}

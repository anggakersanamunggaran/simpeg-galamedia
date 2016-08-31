<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datadp3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_dp3', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();
            $table->string('tahun');
            $table->string('kesetiaan');
            $table->string('prestasi');
            $table->string('tanggung_jawab');
            $table->string('ketaatan'); 
            $table->string('kejujuran');
            $table->string('kerjasama');
            $table->string('prakarsa');
            $table->string('kepemimpinan');
            $table->string('rata_rata');
            $table->string('atasan');
            $table->string('penilai');
            $table->string('mengetahui');
            $table->timestamps();
        });

        Schema::table('tbl_data_dp3',function($table){

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
        Schema::drop('tbl_data_dp3');
    }
}

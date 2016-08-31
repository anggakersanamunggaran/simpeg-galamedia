<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dataseminar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_data_seminar', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();        
            $table->text('uraian');
            $table->string('lokasi');
            $table->string('tanggal');          
            $table->timestamps();
        });

         Schema::table('tbl_data_seminar',function($table){

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
        Schema::drop('tbl_data_seminar');
    }
}

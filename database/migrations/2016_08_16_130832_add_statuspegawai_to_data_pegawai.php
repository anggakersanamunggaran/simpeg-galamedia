<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatuspegawaiToDataPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_data_pegawai', function (Blueprint $table) {
            $table->integer('id_status_pegawai')->nullable()->unsigned();
            $table->foreign('id_status_pegawai')->references('id')->on('tbl_master_status_pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

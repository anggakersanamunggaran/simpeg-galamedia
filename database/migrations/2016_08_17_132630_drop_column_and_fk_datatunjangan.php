<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnAndFkDatatunjangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('tbl_data_tunjangan', function ($table) {
         $table->dropForeign(['id_tumt']);   
         $table->dropColumn(['nama_pegawai', 'nilai_tumt', 'kode_tumt','golongan','status_absen','jumlah_hadir','id_tumt']);
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

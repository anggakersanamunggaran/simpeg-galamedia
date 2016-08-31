<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnDataPegawaiAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('tbl_data_pegawai', function ($table) {
         $table->dropForeign(['id_eselon']); 
         $table->dropForeign(['id_unit_kerja']);   
         $table->dropColumn(['id_eselon','id_unit_kerja','tanggal_selesai_jabatan','tanggal_mulai_jabatan',
            'tanggal_sk_jabatan','nomor_sk_jabatan','no_npwp','lokasi_kerja','tanggal_selesai_pangkat','tanggal_mulai_pangkat',
            'tanggal_sk_pangkat','nomor_sk_pangkat','nip_lama']);
         $table->string('status_marital');
         $table->integer('nomor_telepon');
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

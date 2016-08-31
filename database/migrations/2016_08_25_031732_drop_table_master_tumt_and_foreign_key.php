<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTableMasterTumtAndForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_data_pegawai', function ($table) {
         $table->dropForeign(['id_tumt']);   
         $table->dropColumn(['id_tumt']);
         $table->integer('tunjangan_makan');
         $table->integer('tunjangan_transport');
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

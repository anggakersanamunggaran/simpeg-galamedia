<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Masterunitkerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_master_unit_kerja', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama_unit_kerja');
            $table->string('eselon');
            $table->string('parent_unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_master_unit_kerja');
    }
}

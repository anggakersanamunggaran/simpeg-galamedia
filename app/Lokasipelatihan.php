<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasipelatihan extends Model
{
    protected $table = 'tbl_master_lokasi_pelatihan';
    protected $fillable = ['nama_pelatihan','level'];
}

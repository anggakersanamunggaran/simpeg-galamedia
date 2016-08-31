<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $table = 'tbl_master_pelatihan';
    protected $fillable = ['nama_pelatihan','level'];
}

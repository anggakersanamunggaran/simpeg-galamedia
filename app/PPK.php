<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PPK extends Model
{
    protected $table = 'tbl_master_ppk';
    protected $fillable = ['nama_ppk','parents_satuan_kerja'];
}

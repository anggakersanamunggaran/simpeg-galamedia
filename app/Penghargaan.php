<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    protected $table = 'tbl_master_penghargaan';
    protected $fillable = ['nama_penghargaan'];
}

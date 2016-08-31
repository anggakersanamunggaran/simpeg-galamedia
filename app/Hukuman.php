<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hukuman extends Model
{
    protected $table = 'tbl_master_hukuman';
    protected $fillable = ['nama_hukuman'];
    
   
}

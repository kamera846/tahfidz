<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = 'wali';
    protected $fillable = ['nama', 'jk'];
    protected $primaryKey = 'id_wali';
}

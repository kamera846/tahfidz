<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';
    protected $fillable = ['nama', 'kelas', 'jk'];
    protected $primaryKey = 'id_santri';
}

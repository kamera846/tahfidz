<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';
    protected $fillable = ['id_wali', 'nama', 'kelas', 'jk'];
    protected $primaryKey = 'id';

    public function spp()
    {
    	return $this->hasOne('App\SPP');
    }
}

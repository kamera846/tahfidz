<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';
    protected $fillable = ['wali_id', 'nama', 'kelas', 'jk'];
    protected $primaryKey = 'id';

    public function spp()
    {
    	return $this->hasOne('App\SPP');
    }

    public function wali()
    {
    	return $this->belongsTo('App\Wali', 'wali_id');
    }

    public function murojaah()
    {
    	return $this->hasMany('App\Murojaah');
    }

    public function juz()
    {
        return $this->hasOne('App\Juz');
    }
}

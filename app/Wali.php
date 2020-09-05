<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = 'wali';
    protected $fillable = ['user_id','nama', 'no_telp', 'alamat', 'jk',];
    protected $primaryKey = 'id';

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}

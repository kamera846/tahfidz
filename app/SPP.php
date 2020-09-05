<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    protected $table = 'spp';
    protected $fillable = ['nominal', 'santri_id'];
    protected $primaryKey = 'id';

    public function santri()
    {
    	return $this->belongsTo('App\Santri');
    }
}

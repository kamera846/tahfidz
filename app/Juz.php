<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juz extends Model
{
    protected $table = 'juz';
    protected $fillable = ['santri_id', 'juz_ke'];
    protected $primaryKey = 'id';

    public function santri()
    {
        return $this->belongsTo('App\Santri', 'santri_id');
    }
}

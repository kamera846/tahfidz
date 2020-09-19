<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murojaah extends Model
{
    protected $table = 'murojaah';
    protected $fillable = ['santri_id', 'juz', 'halaman', 'jumlah_hafalan', 'tanggal', 'jenis', 'status_hafalan'];
    protected $primaryKey = 'id';

    public function santri()
    {
        return $this->belongsTo('App\Santri', 'santri_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    public function kunjungan()
    {
        return $this->hasMany('App\Kunjungan', 'poli_id');
    }

    public function dokter()
    {
        return $this->hasMany('App\Dokter', 'poli_id');
    }
}

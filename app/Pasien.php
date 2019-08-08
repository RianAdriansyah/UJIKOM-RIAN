<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public function kunjungan()
    {
        return $this->hasMany('App\Kunjungan', 'pasien_id');
    }

    public function rekam_medis()
    {
        return $this->hasMany('App\RekamMedis', 'pasien_id');
    }
}

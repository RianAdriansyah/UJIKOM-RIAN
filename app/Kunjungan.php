<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    public function poliklinik()
    {
        return $this->belongsTo('App\Poliklinik', 'poli_id');
    }

    public function pasien()
    {
        return $this->belongsTo('App\Pasien', 'pasien_id');
    }
    
}

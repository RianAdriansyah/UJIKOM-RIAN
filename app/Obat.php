<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function lab()
    {
        return $this->hasMany('App\Lab', 'obat_id');
    }

    public function rekam_medis()
    {
        return $this->hasMany('App\RekamMedis', 'obat_id');
    }
}

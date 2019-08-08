<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $fillable = ['kd_tindakan', 'nm_tindakan', 'ket'];

    public function rekam_medis()
    {
        return $this->hasMany('App\RekamMedis', 'tindakan_id');
    }
}

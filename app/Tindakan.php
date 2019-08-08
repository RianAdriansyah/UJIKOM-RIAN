<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    public function rekam_medis()
    {
        return $this->hasMany('App\RekamMedis', 'tindakan_id');
    }
}

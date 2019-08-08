<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function poliklinik()
    {
        return $this->belongsTo('App\Poliklinik', 'poli_id');
    }
}

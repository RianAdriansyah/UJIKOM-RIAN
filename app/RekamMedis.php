<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'usser_id');
    }

    public function pasien()
    {
        return $this->belongsTo('App\Pasien', 'pasien_id');
    }

    public function obat()
    {
        return $this->belongsTo('App\Obat', 'obat_id');
    }

    public function tindakan()
    {
        return $this->belongsTo('App\Tindakan'. 'tindakan_id');
    }

    public function lab()
    {
        return $this->hasMany('App\Lab', 'rm_id');
    }
}

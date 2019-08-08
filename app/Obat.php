<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $fillable = ['kd_obat', 'nm_obat', 'jml_obat', 'ukuran', 'harga'];

    public function lab()
    {
        return $this->hasMany('App\Lab', 'obat_id');
    }

    public function rekam_medis()
    {
        return $this->hasMany('App\RekamMedis', 'obat_id');
    }
}

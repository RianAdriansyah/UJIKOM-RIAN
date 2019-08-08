<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = ['no_pasien', 'nm_pasien', 'jk', 'agama',
     'alamat', 'tgl_lahir', 'usia', 'no_tlp', 'nm_kk', 'hub_kel'];

    public function kunjungan()
    {
        return $this->hasMany('App\Kunjungan', 'pasien_id');
    }

    public function rekam_medis()
    {
        return $this->hasMany('App\RekamMedis', 'pasien_id');
    }
}

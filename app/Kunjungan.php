<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $fillable = ['tgl_kunjungan', 'pasien_id', 'poli_id', 'jam_kunjungan'];

    public $timestamps = true;

    public function poliklinik()
    {
        return $this->belongsTo('App\Poliklinik', 'poli_id');
    }

    public function pasien()
    {
        return $this->belongsTo('App\Pasien', 'pasien_id');
    }

    public function dokter()
    {
        return $this->hasMany('App\Dokter', 'kunjungan_id');
    }

}

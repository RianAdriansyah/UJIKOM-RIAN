<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = ['kd_dokter', 'poli_id', 'tgl_kunjungan',
     'nm_dokter', 'sip', 'tempat_lahir', 'no_tlp', 'alamat'];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function poliklinik()
    {
        return $this->belongsTo('App\Poliklinik', 'poli_id');
    }
}

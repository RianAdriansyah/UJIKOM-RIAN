<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = ['obat_id', 'rm_id', 'hasil_lab', 'ket'];

    public $timestamps = true;

    public function obat()
    {
        return $this->belongsTo('App\Obat', 'obat_id');
    }

    public function rekam_medis()
    {
        return $this->belongsTo('App\RekamMedis', 'rm_id');
    }
}

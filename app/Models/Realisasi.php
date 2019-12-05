<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realisasi extends Model
{
    protected $table='realisasi';

    protected $fillable=['kode_komponen','nilai','tahun'];


    function komponen()
    {
        return $this->belongsTo('App\Models\KomponenDana','kode_komponen','kode_komponen');
    }
}

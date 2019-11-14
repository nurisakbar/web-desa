<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    protected $table='pendapatan';

    protected $fillable=['komponen_dana_id','nilai','tahun'];


    function komponen()
    {
        return $this->belongsTo('App\Models\KomponenDana','komponen_dana_id','id');
    }
}

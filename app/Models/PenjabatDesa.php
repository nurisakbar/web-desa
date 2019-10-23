<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjabatDesa extends Model
{
    protected $table="penjabat_desa";

    protected $fillable=['jabatan','nik'];

    public function penduduk()
    {
        return $this->belongsTo('App\Models\Penduduk','nik','nik');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
        protected $table="dusun";

        protected $fillable = ['nama_dusun','kode_dusun','nik'];

        public function penduduk()
        {
                return $this->belongsTo('App\Models\Penduduk','nik','nik')->withDefault(['nama'=>'Belum Ditentukan']); 
        }
        
}

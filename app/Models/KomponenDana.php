<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomponenDana extends Model
{
    protected $table="komponen_dana";

    protected $fillable=['kode_komponen','nama_komponen','keterangan'];
}

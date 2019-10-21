<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $table="kartu_keluarga";

    protected $fillable=['nomor_kk','nama_kk','alamat','village_id'];

    protected $primaryKey="nomor_kk";

    public $incrementing = false;
}

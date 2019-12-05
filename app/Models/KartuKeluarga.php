<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $table="kartu_keluarga";

    protected $fillable=['nomor_kk','nama_kk','alamat','village_id','taraf_kehidupan_id'];

    protected $primaryKey="nomor_kk";

    public $incrementing = false;

    function tarafKehidupan()
    {
        return $this->belongsTo('App\Models\TarafKehidupan')->withDefault(['taraf_kehidupan'=>'Miskin']);
    }
}

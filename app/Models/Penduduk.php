<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table='penduduk';

    public function getFotoAttribute($value)
    {
        return $value==null?'http://images.clipartpanda.com/male-black-hair-clipart-male_user_icon_clip_art.jpg':$value;

    }

    // public function getTanggalLahirAttribute($value)
    // {
    //     return date_format(date_create($value),"m-d-Y");
    // }

    function dusun()
    {
        return $this->belongsTo('App\Models\Dusun')->withDefault(['nama_dusun'=>'null']);
    }

    function agama()
    {
        return $this->belongsTo('App\Models\Agama')->withDefault(['agama'=>'null']);
    }

    function pendidikan()
    {
        return $this->belongsTo('App\Models\Pendidikan')->withDefault(['pendidikan'=>'null']);
    }

    protected $fillable= ['dusun_id','no_kk','nama','nama_ayah','nama_ibu','jenis_kelamin','tempat_lahir','tanggal_lahir','agama_id','pendidikan_id','jenis_pekerjaan_id','status_kawin_id','no_passport','no_kitap','nik','status_hubungan','kewarganegaraan','foto'];
}

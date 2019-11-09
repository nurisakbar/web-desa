<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table='penduduk';

    // public function getTanggalLahirAttribute($value)
    // {
    //     return date_format(date_create($value),"m-d-Y");
    // }

    protected $fillable= ['no_kk','nama','nama_ayah','nama_ibu','jenis_kelamin','tempat_lahir','tanggal_lahir','agama_id','pendidikan_id','jenis_pekerjaan_id','status_kawin_id','no_passport','no_kitap','nik','status_hubungan'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table="artikel";

    public $fillable=['judul','id_kategori','artikel','gambar','slug'];



    function kategory()
    {
        return $this->belongsTo('App\Models\Kategori','id_kategori','id');
    }
}

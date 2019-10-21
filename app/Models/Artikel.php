<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table="artikel";

    public $fillable=['judul','artikel','gambar','slug'];
}

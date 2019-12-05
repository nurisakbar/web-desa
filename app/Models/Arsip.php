<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    protected $table="arsip";

    public $fillable=['judul','nama_file','slug'];
}

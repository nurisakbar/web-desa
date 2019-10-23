<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Artikel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Artikel::class, function (Faker $faker) {
    $judul = $faker->sentence($nbWords = 6, $variableNbWords = true);
    return [
        'judul'=>$judul,
        'slug'=>Str::slug($judul, '-'),
        'artikel'=>$faker->text($maxNbChars = 200),
        'gambar'=>'gambar1.jpg'
    ];
});

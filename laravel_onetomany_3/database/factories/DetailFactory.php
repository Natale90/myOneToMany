<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detail;
use Faker\Generator as Faker;

$factory->define(Detail::class, function (Faker $faker) {
    return [

        'argument' => $faker -> word,
        'like' => $faker -> numberBetween(0, 500),
    ];
});

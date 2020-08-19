<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Snack;
use Faker\Generator as Faker;
use App\Bar;
use App\Site;


$factory->define(Snack::class, function (Faker $faker) {
    return [
        'bar_id' => $faker->randomDigit,
        'nombre' => $faker->text,
        'precio' => $faker->randomFloat(),
        'disponible' => $faker->boolean,
        //bar BelongsTo Bar bar_id
        //site BelongsTo Site site_id
    ];
});

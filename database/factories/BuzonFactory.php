<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Buzon;
use Faker\Generator as Faker;
use App\Bar;


$factory->define(Buzon::class, function (Faker $faker) {
    return [
        'bar_id' => $faker->randomDigit,
        'descripcion' => $faker->text(1024),
        //bar BelongsTo Bar bar_id
    ];
});

<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Preferencia;
use Faker\Generator as Faker;
use App\Menu;


$factory->define(Preferencia::class, function (Faker $faker) {
    return [
        'menu_id' => $faker->randomDigit,
        'fecha' => $faker->word,
        'observacion' => $faker->text(1024),
        //menu BelongsTo Menu menu_id
    ];
});

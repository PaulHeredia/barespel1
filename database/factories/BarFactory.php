<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Bar;
use Faker\Generator as Faker;
use App\Site;
use App\Menu;
use App\Snack;


$factory->define(Bar::class, function (Faker $faker) {
    return [
        'site_id' => $faker->optional()->randomDigit,
        'nombre' => $faker->text,
        'abierto' => $faker->boolean,
        //site BelongsTo Site site_id
        //menu HasMany Menu id
        //snack HasMany Snack id
    ];
});

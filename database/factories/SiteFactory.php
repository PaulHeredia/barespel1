<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Site;
use Faker\Generator as Faker;
use App\Bar;
use App\Menu;


$factory->define(Site::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text,
        'direccion' => $faker->text,
        //bar HasMany Bar id
        //menu HasMany Menu id
    ];
});

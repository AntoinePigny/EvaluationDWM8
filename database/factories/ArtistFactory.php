<?php

use Faker\Generator as Faker;
use App\Artist as Artist;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween(15, 120),
        'country_id' => $faker->numberbetween(1, 50)
    ];
});

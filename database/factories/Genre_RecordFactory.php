<?php

use Faker\Generator as Faker;
use App\Genre_Record as Genre_Record;

$factory->define(Genre_Record::class, function (Faker $faker) {
    return [
        'genre_id' => $faker->numberBetween(1, 40),
        'record_id' => $faker->numberBetween(1, 200)
    ];
});

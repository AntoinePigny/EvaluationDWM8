<?php

use Faker\Generator as Faker;
use App\Artist_Record as Artist_Record;

$factory->define(Artist_Record::class, function (Faker $faker) {
    return [
        'artist_id' => $faker->numberBetween(1, 50),
        'record_id' => $faker->numberBetween(1, 200)
    ];
});

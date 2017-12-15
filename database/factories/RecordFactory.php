<?php

use Faker\Generator as Faker;
use App\Record as Record;

$factory->define(Record::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase(),
        'label_id' => $faker->numberBetween(1, 20),
        'stock' => $faker->numberBetween(0, 200)

    ];
});

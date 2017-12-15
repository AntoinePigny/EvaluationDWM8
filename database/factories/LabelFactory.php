<?php

use Faker\Generator as Faker;
use App\Label as Label;
$factory->define(Label::class, function (Faker $faker) {
    return [
        'name' => $faker->company()
    ];
});

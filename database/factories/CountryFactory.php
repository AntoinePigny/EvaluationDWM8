<?php

use Faker\Generator as Faker;
use App\Country as Country;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'label' => $faker->country()
    ];
});

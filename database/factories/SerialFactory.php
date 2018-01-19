<?php

use Faker\Generator as Faker;

$factory->define(App\Serial::class, function (Faker $faker) {
    return [
        'serial_no' => $faker->creditCardNumber,
    ];
});

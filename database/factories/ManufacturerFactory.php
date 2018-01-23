<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Manufacturer::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'website' => $faker->domainName,
        'address' => $faker->address,
    ];
});

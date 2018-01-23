<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\CarModel::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'type' => $faker->randomElement(['Economy car', 'Luxury vehicle', 'Sports car', 'Other']),
        'year' => $faker->year,
        'horsepower' => $faker->numberBetween(60, 250),
        'mpg' => $faker->randomFloat(2, 4, 30),
    ];
});

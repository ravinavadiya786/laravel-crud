<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empolyee;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Empolyee::class, function (Faker $faker) {
    return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'address' => $faker->address,
            'salary' => $faker->numberBetween($min = 1000, $max = 9000), 
    ];
});

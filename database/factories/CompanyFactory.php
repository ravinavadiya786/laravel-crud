<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'website' => $faker->url,
        'image' => 'https://picsum.photos/200?random='.$faker->randomDigit()
    ];
});

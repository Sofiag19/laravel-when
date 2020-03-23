<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'desc' => $faker->sentence,
        'openDate' => $faker->date(),
        'expDate' => $faker->dateTimeBetween('now','+2 years'),
        'img' => ''
    ];
});

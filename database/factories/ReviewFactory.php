<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {  
    $products = \App\Product::all()->pluck('id')->toArray();
    $users = \App\User::all()->pluck('id')->toArray();
    return [
        'review' => $faker->words(10, true),
        'product_id' => $faker->shuffle($products)[0],
        'user_id' => $faker->shuffle($users)[0],
        'created_at' => $faker->dateTimeBetween('2015-01-01','2020-01-01'),
    ];
});

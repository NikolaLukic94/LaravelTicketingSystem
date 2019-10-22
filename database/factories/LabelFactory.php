<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Label::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'order_num' => $faker->unique()->numberBetween($min = 1, $max = 100),
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
    ];
});

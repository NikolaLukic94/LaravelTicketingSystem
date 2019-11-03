<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->sentence,
        'ticket_id'  => function () {
            return factory('App\Ticket')->create()->id;
        },
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
    ];
});

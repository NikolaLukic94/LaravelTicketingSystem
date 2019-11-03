<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'importance' => 'medium',
        'description' => $faker->sentence,
        'status' => 'new',
        'due' => $faker->date,
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'assignee_id' => function () {
            return factory('App\User')->create()->id;
        },        
        'label_id' => function () {
            return factory('App\Label')->create()->id;
        }, 
        'category_id' => function () {
            return factory('App\TicketCategory')->create()->id;
        }, 
        'sub_category_id' => function () {
            return factory('App\TicketSubCategory')->create()->id;
        },                        
    ];
});
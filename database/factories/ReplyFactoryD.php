<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\reply;
use Faker\Generator as Faker;

$factory->define(reply::class, function (Faker $faker) {

    return [
        'user_id' => 1,
        'conversation_id' => 2,
        'body' => $faker->sentence,
    ];
});

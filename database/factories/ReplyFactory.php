<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;


$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'conversation_id' => 2,
        'body' => $faker->sentence,
    ];
});

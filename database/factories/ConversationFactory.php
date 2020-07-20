<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conversation;
use Faker\Generator as Faker;

$factory->define(Conversation::class, function (Faker $faker) {

    // $user = App\User::orderByRaw('RAND()')->first();

    return [
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'body' => $faker->paragraph,

    ];
});

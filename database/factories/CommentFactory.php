<?php

use Faker\Generator as Faker;
use App\Models\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => rand(1,20),
        'name' => $faker->userName,
        'email' => $faker->email,
        'content_raw' => $faker->sentence,
    ];
});

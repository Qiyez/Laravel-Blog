<?php

use Faker\Generator as Faker;
use App\Models\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => 1,
        'name' => $faker->userName,
        'email' => $faker->email,
        'content_raw' => str_limit($faker->sentence(mt_rand(10, 20)), 252),
    ];
});

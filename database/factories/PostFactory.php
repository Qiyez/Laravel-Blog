<?php

use Faker\Generator as Faker;
use App\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(mt_rand(3, 10));
    return [
        'title' => $title,
        'subtitle' => str_limit($faker->sentence(mt_rand(10, 20)), 150),
        'page_image' => 'img/bg'.rand(1,12).'.jpg',
        'content_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'published_at' => $faker->dateTimeBetween('-2 years', '-2 month'),
        'meta_description' => "Meta for $title",
        'is_draft' => false,
    ];
});
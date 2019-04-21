<?php

use Faker\Generator as Faker;
use App\Models\Tag;

$factory->define(Tag::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'tag' => $word,
        'title' => ucfirst($word),
        'subtitle' => $faker->sentence,
        'page_image' => 'bg'.rand(1,18).'.jpg',
        'meta_description' => "Meta for $word",
        'reverse_direction' => false,
    ];
});
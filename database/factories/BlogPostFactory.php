<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Models\BlogPost::class, function (Faker $faker) {

  $title = $faker->sentence(rand(3,8), true);
  $txt = $faker->realText(rand(1000, 4000));
  $isPublished = rand(1,5) > 1;

  return [
        'category_id' => rand(1,11),
        'user_id' => (rand(1,5) == 5) ? 1 : 2,
        'title' => $title,
        'slug' => Str::slug($title),
        'excerpt' => $faker->text(rand(40, 100)),
        'content_new' => $txt,
        'content_html' => $txt,
        'is_published' => $isPublished,
        'published_at' => $isPublished ? $faker->dateTimeBetween('-2 months', '-1 days') : null
    ];
});

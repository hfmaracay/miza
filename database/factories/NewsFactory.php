<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
  return [
    'name' => $faker->name,
    'description' => $faker->text,
    'image' => 'image.jpg'
  ];
});

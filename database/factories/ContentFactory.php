<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Content;
use Faker\Generator as Faker;

$factory->define(Content::class, function (Faker $faker) {
  return [
    'name' => $faker->name,
    'description' => $faker->text
  ];
});

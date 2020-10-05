<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
  return [
    'name' => $faker->name,
    'last_name' => $faker->lastname,
    'title' => $faker->title,
    'description' => $faker->text,
    'photo' => 'usuario.jpg'
  ];
});

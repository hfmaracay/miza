<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Team::class;

  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'name' => $this->faker->firstName(),
      'last_name' => $this->faker->lastName(),
      'title' => $this->faker->title,
      'description' => $this->faker->text,
      'photo' => 'usuario.jpg'
    ];
  }
}

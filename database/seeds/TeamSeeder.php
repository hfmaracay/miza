<?php

use App\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(Team::class)->create([
      'name' => 'José',
      'last_name' => 'Clavijo',
      'title' => 'Director',
      'description' => '<p>PhD. Universidad de McGill, Canada.</p>
      <p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'jose_clavijo.jpg'
    ]);

    factory(Team::class)->create([
      'name' => 'Carlos Julio',
      'last_name' => 'Rosales',
      'title' => 'Profesor Jubilado',
      'description' => '<p></p>',
      'photo' => 'carlos_rosales.jpg'
    ]);

    factory(Team::class)->create([
      'name' => 'Mauro',
      'last_name' => 'Costa',
      'title' => 'Investigador Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'mauro_costa.jpg'
    ]);

    factory(Team::class)->create([
      'name' => 'Angel',
      'last_name' => 'Viloria',
      'title' => 'Investigador Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'angel_viloria.jpg'
    ]);

    factory(Team::class)->create([
      'name' => 'Francisco',
      'last_name' => 'Romero',
      'title' => 'Investigador Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'francisco_romero.jpg'
    ]);

    factory(Team::class)->create([
      'name' => 'John',
      'last_name' => 'Lattke',
      'title' => 'Investigador Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Hymenoptera</li>
        <li>Formicidae</li>
      </ul>',
      'photo' => 'john_lattke.jpg'
    ]);

    factory(Team::class)->create([
      'name' => 'Marco',
      'last_name' => 'Gaiani',
      'title' => 'Investigador Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Hemiptera</li>
        <li>Auchenorrhyncha</li>
        <li>Informática de la Biodiversidad</li>
      </ul>',
      'photo' => 'marco_gaiani.jpg'
    ]);

    factory(Team::class)->create([
      'name' => 'Diony',
      'last_name' => 'Velásquez',
      'title' => 'Técnico',
      'description' => '<p></p>',
      'photo' => 'diony_velasquez.jpg'
    ]);

    factory(Team::class)->create([
      'name' => 'Franklin',
      'last_name' => 'Rojas',
      'title' => 'Técnico',
      'description' => '<p></p>',
      'photo' => 'franklin_rojas.jpg'
    ]);
  }
}

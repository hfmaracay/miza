<?php

namespace Database\Seeders;

use App\Models\Team;
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
    Team::factory()->create([
      'name' => 'José',
      'last_name' => 'Clavijo',
      'title' => 'Director y Profesor Jubilado',
      'description' => '<p>PhD. Universidad de McGill, Canada.</p>
      <p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'jose_clavijo.jpg',
      'order' => 1
    ]);

    Team::factory()->create([
      'name' => 'Vilma',
      'last_name' => 'Savini',
      'title' => 'Profesora',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Coleoptera</li>
      </ul>',
      'photo' => 'vilma_savini.jpg',
      'order' => 2
    ]);

    Team::factory()->create([
      'name' => 'Quintin',
      'last_name' => 'Arias',
      'title' => 'Profesor',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Odonata</li>
      </ul>',
      'photo' => 'quintin_arias.jpg',
      'order' => 3
    ]);

    Team::factory()->create([
      'name' => 'Jairelen',
      'last_name' => 'Mora',
      'title' => 'Profesora',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Diptera</li>
      </ul>',
      'photo' => 'jairelen_mora.jpg',
      'order' => 4
    ]);

    Team::factory()->create([
      'name' => 'Abimel',
      'last_name' => 'Moreno',
      'title' => 'Profesora',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Coleoptera</li>
      </ul>',
      'photo' => 'abimel_moreno.jpg',
      'order' => 5
    ]);

    Team::factory()->create([
      'name' => 'Rafael',
      'last_name' => 'Montilla',
      'title' => 'Profesor',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Hymenoptera</li>
      </ul>',
      'photo' => 'rafael_montilla.jpg',
      'order' => 6
    ]);

    Team::factory()->create([
      'name' => 'Nereida',
      'last_name' => 'Delgado',
      'title' => 'Profesora',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Diptera</li>
      </ul>',
      'photo' => 'nereida_delgado.jpg',
      'order' => 7
    ]);

    Team::factory()->create([
      'name' => 'Luis',
      'last_name' => 'Joly',
      'title' => 'Profesor Jubilado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Coleoptera</li>
      </ul>',
      'photo' => 'luis_joly.jpg',
      'order' => 8
    ]);

    Team::factory()->create([
      'name' => 'Jurg',
      'last_name' => 'De Marmels',
      'title' => 'Profesor Jubilado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Odonata</li>
      </ul>',
      'photo' => 'jurg_de_marmels.jpg',
      'order' => 9
    ]);

    Team::factory()->create([
      'name' => 'Mauro',
      'last_name' => 'Costa',
      'title' => 'Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'mauro_costa.jpg',
      'order' => 10
    ]);

    Team::factory()->create([
      'name' => 'Marco',
      'last_name' => 'Gaiani',
      'title' => 'Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Homoptera</li>
        <li>Hymenoptera</li>
      </ul>',
      'photo' => 'marco_gaiani.jpg',
      'order' => 11
    ]);

    Team::factory()->create([
      'name' => 'Francisco',
      'last_name' => 'Romero',
      'title' => 'Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'francisco_romero.jpg',
      'order' => 12
    ]);

    Team::factory()->create([
      'name' => 'Angel',
      'last_name' => 'Viloria',
      'title' => 'Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'angel_viloria.jpg',
      'order' => 13
    ]);

    Team::factory()->create([
      'name' => 'John',
      'last_name' => 'Lattke',
      'title' => 'Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Hymenoptera</li>
      </ul>',
      'photo' => 'john_lattke.jpg',
      'order' => 14
    ]);

    Team::factory()->create([
      'name' => 'Oswaldo',
      'last_name' => 'Hernández',
      'title' => 'Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Hymenoptera</li>
      </ul>',
      'photo' => 'oswaldo_hernandez.jpg',
      'order' => 15
    ]);

    Team::factory()->create([
      'name' => 'Osvaldo',
      'last_name' => 'Villareal',
      'title' => 'Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Arácnidos</li>
      </ul>',
      'photo' => 'osvaldo_villareal.jpg',
      'order' => 16
    ]);

    Team::factory()->create([
      'name' => 'Juan C.',
      'last_name' => 'de Souza',
      'title' => 'Asociado',
      'description' => '<p>Areas de estudio:</p>
      <ul>
        <li>Lepidoptera</li>
      </ul>',
      'photo' => 'juan_de_souza.jpg',
      'order' => 17
    ]);

    Team::factory()->create([
      'name' => 'Diony',
      'last_name' => 'Velásquez',
      'title' => 'Técnico',
      'description' => '<p></p>',
      'photo' => 'diony_velasquez.jpg',
      'order' => 18
    ]);

    Team::factory()->create([
      'name' => 'Franklin',
      'last_name' => 'Rojas',
      'title' => 'Técnico',
      'description' => '<p></p>',
      'photo' => 'franklin_rojas.jpg',
      'order' => 19
    ]);

    Team::factory()->create([
      'name' => 'Anexis',
      'last_name' => 'Sánchez',
      'title' => 'Secretaria',
      'description' => '<p></p>',
      'photo' => 'anexis_sanchez.jpg',
      'order' => 20
    ]);

    Team::factory()->create([
      'name' => 'Edixon',
      'last_name' => 'Malpa',
      'title' => 'Seguridad',
      'description' => '<p></p>',
      'photo' => 'edixon_malpa.jpg',
      'order' => 21
    ]);
  }
}

<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      Team::factory(30)->create();

      $team = new Team();

      $team->name='FC Barcelona';
      $team->color='Blue';
      $team->location='Barcelona, Spain';
      $team->slug='fc-barcelona';

      $team->save();
    }
}

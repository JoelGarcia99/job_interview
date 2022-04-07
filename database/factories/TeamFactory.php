<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    
    protected $model = Team::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
	$name = $this->faker->name();

        return [
	  'name'=> $name,
	  'location'=>$this->faker->name() . ', ' . $this->faker->name(),
	  'color'=>$this->faker->name(),
	  'dt'=>$this->faker->name(),
	  'stadium'=>$this->faker->name(),
	  'history'=>$this->faker->paragraph(),
	  'slug'=>Str::slug($name, '-')
        ];
    }
}

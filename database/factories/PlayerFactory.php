<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

	$name = $this->faker->name();

        return [
	  'name'=>$name,
	  'dorsal'=>$this->faker->randomNumber(2),
	  'position'=>$this->faker->randomElement(['DC','DF','PT','MC','LI','LD','EXI','EXD','MO']),
	  'foot'=>$this->faker->randomElement(['L', 'R']),
	  'slug'=> Str::slug($name, '-').'-'.$this->faker->randomNumber(),
	  'born_date'=>$this->faker->date(),
	  'team_id'=>$this->faker->randomNumber(1, strict: true)
        ];
    }
}

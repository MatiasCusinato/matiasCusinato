<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->userName,
            'edad' => $this->faker->numberBetween($min = 5, $max = 80),
            'pais' => $this->faker->country,
            'recordPts' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'horasJugadas' => $this->faker->numberBetween($min = 0, $max = 9000),
        ];
    }
}

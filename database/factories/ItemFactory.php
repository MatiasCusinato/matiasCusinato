<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'tipo'=> $this->faker->word,
            'unidad' => $this->faker->lexify('???'),
            'cantidad' => $this->faker->numberBetween($min = 1, $max = 6),
            'costo_unidad' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 200, $max = 3000),
            'costo_deManoDeObra' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 2000),
            //'total' => $this->sum(\DB::raw('costoUnidad + costoManoDeObra')), 
            'Total' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 200, $max = 10000),
        ];
    }
}

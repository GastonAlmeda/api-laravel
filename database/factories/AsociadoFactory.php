<?php

namespace Database\Factories;

use App\Models\Asociado;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsociadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asociado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'numAsociado' => rand(1,15),
            'fechaIngreso' => $this->faker->dateTime,
            'fechaBaja' => $this->faker->dateTime,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progetto>
 */
class ProgettoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nomeProgetto"=>fake()->unique()->text(15),
            "descrizione"=>fake()->unique()->text(200),
            "nomeCliente"=>fake()->text(10),
            "user_id"=> User::get()->random()->id,
            "completato"=>fake()->boolean(),
        ];
    }
}

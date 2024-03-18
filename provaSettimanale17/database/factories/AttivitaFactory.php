<?php

namespace Database\Factories;

use App\Models\Progetto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attivita>
 */
class AttivitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dataInizio = fake()->date();
        $dataFine = fake()->dateTimeBetween($dataInizio, '+1 month');
        $progetto = Progetto::with('attivita')->with('user')->get()->random();
        return [
            "nome"=>fake()->unique()->text(15),
            "descrizione"=>fake()->unique()->text(200),
            "progetto_id"=> $progetto->id,
            'dataInizio' => $dataInizio,
            'dataFine' => $dataFine,
            "completato" => fake()->boolean($progetto->completato ? 100 : ($progetto->load('attivita')->attivita->count() ? 0 : 50)) //non so per quale motivo non riesco a tirare su l'array delle attività da questa factory! Quello che ho scritto non funziona come vorrei!
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Modesl\Cour;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crenaux>
 */
class CrenauxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateDebut = $this->faker->dateTimeBetween('-1 week','+1 week');
        $dateFin = $this->faker->dateTimeBetween($dateDebut,$dateDebut->format('Y-m-d H:i:s').' +1 week');

        return [
            'debut'=>$dateDebut,
            'fin'=>$dateFin,
            'id_cours'=>Cour::factory(),
        ];
    }
}

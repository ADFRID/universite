<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
     public function definition()
    {
        return [
            'titre' => $this->faker->randomElement([
                "Technicien de laboratoire",
                "Assistant juriste",
                "Biologiste",
                "Médiateur social",
                "Psychologue du travail",
                "Assisstant(e) de direction",
                "Contrôleur de gestion",
                "Technicien de maintenance",
            ]),
            'entreprise' => $this->faker->name(),
            'ville' => $this->faker->randomElement([
                "Bordeaux",
                "Pessace",
                "Libourne",
                "Cestas",
                "Arcachon"
            ]),
            'description' => $this->faker->text(),   
        ];
    }
    
}

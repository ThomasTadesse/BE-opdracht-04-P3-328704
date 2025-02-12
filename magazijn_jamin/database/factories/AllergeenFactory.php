<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AllergeenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $staticAllergeen = [
            [
                'Naam' => 'Gluten',
                'Omschrijving' => 'Dit product bevat gluten',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Gelatine',
                'Omschrijving' => 'Dit product bevat gelatine',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'AZO-Kleurstof',
                'Omschrijving' => 'Dit product bevat AZO-kleurstoffen',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Lactose',
                'Omschrijving' => 'Dit product bevat lactose',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Soja',
                'Omschrijving' => 'Dit product bevat soja',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
        ];

        return $this->faker->randomElement($staticAllergeen);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductPerAllergeenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $staticProductPerAllergeen = [
            [
                'ProductId' => 1,
                'AllergeenId' => 2,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 1,
                'AllergeenId' => 1,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 1,
                'AllergeenId' => 3,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 3,
                'AllergeenId' => 4,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 6,
                'AllergeenId' => 5,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 9,
                'AllergeenId' => 2,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 9,
                'AllergeenId' => 5,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 10,
                'AllergeenId' => 2,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 12,
                'AllergeenId' => 4,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 13,
                'AllergeenId' => 1,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 13,
                'AllergeenId' => 4,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 13,
                'AllergeenId' => 5,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'ProductId' => 14,
                'AllergeenId' => 5,
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
        ];

        return $this->faker->randomElement($staticProductPerAllergeen);
    }
}

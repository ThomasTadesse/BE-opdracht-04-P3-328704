<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $staticContacts = [
            [
                'Straat' => 'Van Gilslaan',
                'Huisnummer' => '34',
                'Postcode' => '1045CB',
                'Stad' => 'Hilvarenbeek',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Straat' => 'Den Dolderpad',
                'Huisnummer' => '2',
                'Postcode' => '1067RC',
                'Stad' => 'Utrecht',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Straat' => 'Fredo Raalteweg',
                'Huisnummer' => '257',
                'Postcode' => '1236OP',
                'Stad' => 'Nijmegen',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Straat' => 'Bertrand Russellhof',
                'Huisnummer' => '21',
                'Postcode' => '2034AP',
                'Stad' => 'Den Haag',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Straat' => 'Leon van Bonstraat',
                'Huisnummer' => '213',
                'Postcode' => '145XC',
                'Stad' => 'Lunteren',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Straat' => 'Bea van Lingenlaan',
                'Huisnummer' => '234',
                'Postcode' => '2197FG',
                'Stad' => 'Sint Pancras',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
        ];

        return $this->faker->randomElement($staticContacts);
    }
}

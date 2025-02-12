<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $staticProducts = [
            [
                'Naam' => 'Mintnopjes',
                'Barcode' => '8719587231278',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Schoolkrijt',
                'Barcode' => '8719587326713',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Honingdrop',
                'Barcode' => '8719587327836',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Zure Beren',
                'Barcode' => '8719587321441',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Cola Flesjes',
                'Barcode' => '8719587321237',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Turtles',
                'Barcode' => '8719587322245',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Witte Muizen',
                'Barcode' => '8719587328256',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Reuzen Slangen',
                'Barcode' => '8719587325641',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Zoute Rijen',
                'Barcode' => '8719587322739',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Winegums',
                'Barcode' => '8719587327527',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Drop Munten',
                'Barcode' => '8719587322345',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Kruis Drop',
                'Barcode' => '8719587322265',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Zoute Ruitjes',
                'Barcode' => '8719587323256',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
            [
                'Naam' => 'Drop ninja’s',
                'Barcode' => '8719587323277',
                'IsActief' => 1,
                'Opmerkingen' => null,
                'DatumAangemaakt' => now(),
                'DatumGewijzigd' => now(),
            ],
        ];

        return $this->faker->randomElement($staticProducts);
    }
}

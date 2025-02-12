<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\User;
use App\Models\Leverancier;
use App\Models\Product;
use App\Models\Magazijn;
use App\Models\Contact;
use App\Models\ProductPerLeverancier;
use App\Models\Allergeen;
use App\Models\ProductPerAllergeen;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Other seeders can be called here
        // $this->call(OtherSeeder::class);

        Leverancier::factory()->count(7)->create();
        Contact::factory()->count(6)->create();
        
        // ::factory()->count( )->create();
        // ::factory()->count( )->create();
        // ::factory()->count( )->create();
        // ::factory()->count( )->create();
    }
}

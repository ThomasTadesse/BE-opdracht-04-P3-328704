<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
        DROP PROCEDURE IF EXISTS GetAllergenen;
        CREATE PROCEDURE GetAllergenen()
        BEGIN
            SELECT 
                a.id AS Id,
                p.Naam AS ProductNaam,
                a.Naam AS AllergeenNaam,
                a.Omschrijving,
                m.AantalAanwezig
            FROM Allergeen a
            JOIN ProductPerAllergeen pa ON a.Id = pa.AllergeenId
            JOIN Product p ON pa.ProductId = p.Id
            LEFT JOIN Magazijn m ON p.Id = m.ProductId
            WHERE a.IsActief = 1 AND p.IsActief = 1
            ORDER BY ProductNaam ASC;
        END');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllergenen');
    }
};

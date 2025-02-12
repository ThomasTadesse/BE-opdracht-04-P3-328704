<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Model
{
    use HasFactory;

    protected $table = 'product_per_leverancier'; // Ensure the table name is correct

    protected $primaryKey = 'Id'; // Ensure the primary key is correct

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'LeverancierId',
        'ProductId',
        'DatumLevering',
        'Aantal',
        'DatumEerstVolgendeLevering'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProductPerAllergeen;


class Allergeen extends Model
{
    use HasFactory;

    protected $table = 'Allergeen';
    
    protected $primaryKey = 'Id';
    
    public $timestamps = false;

    protected $fillable = [
        'Naam',
        'Omschrijving'
    ];

    public function productPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class, 'AllergeenId', 'Id');
    }
}

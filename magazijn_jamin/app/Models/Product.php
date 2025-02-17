<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Task;
use App\Models\Magazijn;
use App\Models\ProductPerLeverancier;
use App\Models\ProductPerAllergeen;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $table = 'Product'; // Ensure the table name is correct

    protected $primaryKey = 'Id'; // Ensure the primary key is correct

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'Naam',
        'Barcode'
    ];

    public function magazijn()
    {
        return $this->hasOne(Magazijn::class, 'productId', 'Id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function productPerLeverancier()
    {
        return $this->hasMany(ProductPerLeverancier::class, 'ProductId', 'Id');
    }

    public function productPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class, 'ProductId', 'Id');
    }
}

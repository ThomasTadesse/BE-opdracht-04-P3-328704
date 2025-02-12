<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    use HasFactory;

    protected $table = 'allergeen'; // Ensure the table name is correct

    protected $primaryKey = 'Id'; // Ensure the primary key is correct

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'Naam',
        'Omschrijving'
    ];
}

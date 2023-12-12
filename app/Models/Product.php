<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nom',
        'prix',
        'nbr_place',
        'description',
        'fabricant',
        'modele',
        'date_fabrication',
        'couleur',
    ];
}

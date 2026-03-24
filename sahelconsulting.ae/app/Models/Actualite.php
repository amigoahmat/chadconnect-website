<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table='actualites';
    protected $fillable=[

        'titre',
        'description',
        'image',
        'categorie',
        'editeur',
        'slug'
    ];
}


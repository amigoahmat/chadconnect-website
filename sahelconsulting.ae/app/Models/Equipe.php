<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table='equipes';
    protected $fillable=[

        'nom',
        'post',
        'image',
        'facebook',
        'twitter',
        'linkedin'
    ];
}






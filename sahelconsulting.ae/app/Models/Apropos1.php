<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apropos1 extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table='apropos1s';
    protected $fillable=[
        'titre',
        'image',
        'description',
    ];
}

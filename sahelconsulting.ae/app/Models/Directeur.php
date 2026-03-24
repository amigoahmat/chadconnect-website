<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directeur extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table='directeurs';
    protected $fillable=[
        'image',
        'description',
    ];
}

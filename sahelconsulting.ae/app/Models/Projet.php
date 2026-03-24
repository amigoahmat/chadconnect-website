<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table='projets';
    protected $fillable = [
        'titre',
        'description',
        'image1',
        'image2',
        'image3',
        'image4'];


}








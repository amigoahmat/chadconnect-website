<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apropos extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = true;
    protected $table='apropos';
    protected $fillable=[
        'histoire',
        'expertise',
        'vision',
        'approche',
        'imageh',
        'imagee',
        'imagev',
        'imagea'
    ];
}

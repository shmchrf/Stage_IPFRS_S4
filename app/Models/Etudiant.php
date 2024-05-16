<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nni',
        'nomprenom',
        'nationalite',
        'diplome',
        'genre',
        'lieunaissance',
        'adress',
        'age',
        'email',
        'phone',
        'wtsp',
    ];
}

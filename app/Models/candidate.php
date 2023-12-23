<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    use HasFactory;
    protected $table = 'candidate';

    protected $fillable = [
        'image',
        'dossard',
        'nom',
        'nombre'
    ];
}

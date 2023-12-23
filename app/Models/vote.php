<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    use HasFactory;
    protected $table = 'vote';

    protected $fillable = [
        'user_phone'
    ];

    public function candidate() {
        return $this->belongsTo(candidate::class);
    }
}

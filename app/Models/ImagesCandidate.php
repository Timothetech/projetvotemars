<?php

namespace App\Models;

use App\Models\candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImagesCandidate extends Model
{
    use HasFactory;
    protected $table = 'imagescandidate';

    protected $fillable = [
        'image'
    ];
    public function candidate() {
        return $this->belongsTo(candidate::class);
    }
}

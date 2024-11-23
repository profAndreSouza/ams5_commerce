<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothingDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'measures',
        'materials',
        'care_instructions'
    ];
}

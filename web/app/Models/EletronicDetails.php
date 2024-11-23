<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EletronicDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'technical_information',
        'news',
        'other',
        'manufacturer'
    ];
}

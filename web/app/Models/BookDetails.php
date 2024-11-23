<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'synopsis',
        'general_information',
        'publisher'
    ];

}

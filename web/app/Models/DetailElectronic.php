<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailElectronic extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'technical_information',
        'news',
        'other',
        'manufacturer'
    ];

    public function product()
    {
        return $this->morphOne(Product::class, 'detailed');
    }
}

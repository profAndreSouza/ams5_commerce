<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailClothing extends Model
{
    use HasFactory;

    protected $fillable = [        
        'description',
        'measures',
        'materials',
        'care_instructions'
    ];

    public function product()
    {
        return $this->morphOne(Product::class, 'detailed');
    }
}

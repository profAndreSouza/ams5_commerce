<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'price',
        'color',
        'quantity',
        'image'
    ];

    public function characteristics() {
        return $this->hasMany(Characteristic::class);
    }

    public function detail() {
        return $this->morphTo();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

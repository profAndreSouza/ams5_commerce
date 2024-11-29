<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'type',
        'description'
    ];

    

    public function product() {
        return $this->belongsTo(Characteristic::class);
    }
}
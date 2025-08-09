<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
        'variants',
        'is_bestseller'
    ];

    protected $casts = [
        'variants' => 'array',
        'is_bestseller' => 'boolean'
    ];
}
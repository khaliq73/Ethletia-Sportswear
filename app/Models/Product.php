<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description',  'category', 'images', 
        'item', 'material', 'sizePrinting', 'Design', 'Logo', 'Branding'
    ];

    protected $casts = [
        'images' => 'array', // This will automatically cast 'images' JSON field to an array
    ];
}

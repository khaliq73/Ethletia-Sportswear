<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'contact_number', 
        'country', 'message', 'order_quantity', 'file', 'products',
    ];

    protected $casts = [
        'products' => 'array', // Automatically handle JSON conversion
    ];
}

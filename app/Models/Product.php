<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'precio_product',
        'stock_product',
        'featured',
        'peso_product',
        'description_product',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //se lee un producto pertenece a una categoria
    public function categories(){
        return $this->belongsTo(Category::class, 'id_category');
    }

    protected $fillable = [
        'name_product',
        'precio_product',
        'stock_product',
        'image_product',
        'peso_product',
        'description_product',
    ];
}

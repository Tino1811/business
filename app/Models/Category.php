<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //se lee una categoria puede tener muchos productos
    public function products(){
        return $this->hasMany(Product::class, 'id');
    }
    
    //Asignacion masiva
    protected $fillable = [
        'name_category',
        'slug_category',
        'description_category',
        'image_category',
    ];
}

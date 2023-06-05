<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'label',
        'price_unit',
        'picture_path',
        'color',
        'brand',
        'size',
        'stock_available',
        'gender',
        'categories_id',
    ];

    public function categories()
{
    return $this->belongsToMany(Category::class);
}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Order extends Model
{
    use HasFactory;

    public function products(): BelongsToMany
    {
        //specify the foreign key of the order_items table and the foreign key of the products table in the order_items table
        return $this->belongsToMany(Product::class, 'order_items', 'orders_id', 'products_id');
    }
}

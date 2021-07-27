<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders ()
    {
        return $this->belongsToMany(Product::class, 'product_orders', 'order_id', 'product_id');
    }

    public function comments ()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products ()
    {
        return $this->belongsToMany(Product::class, 'product_orders', 'product_id', 'order_id');
    }

    public function phone ()
    {
        return $this->morphOne(Phone::class, 'phoneable');
    }
}

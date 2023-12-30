<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'sub_total',
    ];

    public function order(): HasMany
    {
        return $this->hasMany(Order::class,'order_id', 'id');
    }

    public function product() : HasMany
    {
        return $this->hasMany(Product::class,'product_id', 'id');
    }

}

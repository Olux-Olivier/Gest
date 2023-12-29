<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'sub_total',
    ];


    public function order()
    {
        return $this->hasMany(Order::class);
    }
    
    //-------------
    public function product()
    {
        return $this->hasMany(Product::class);
    }

    protected $foreignKey = ['order_id', 'product_id']; 

}
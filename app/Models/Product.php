<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'quantity_in_stock',
        'category_id',
        'supplier_id',
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }
    
    //-------------
    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }

    protected $foreignKey = ['category_id', 'supplier_id']; 
}

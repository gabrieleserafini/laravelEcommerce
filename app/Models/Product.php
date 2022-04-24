<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'quantity',
        'product_category_id'
    ];

    public function ProductCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}

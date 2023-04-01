<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_se',
        'email',
        'phone',
        'images',
        'description_en',
        'description_se',
        'price',
        'taste',
        'design',
        'product_id',
        'product_categories_id',
    ];

    protected $casts = [
       'images' => 'array'
    ];

    public function product ()
    {
        return $this->belongsTo(Product::class);
    }

    public function productCategory ()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}

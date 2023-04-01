<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_se',
        'img',
        'count',
        'price',
        'description_en',
        'description_se',
        'product_category_id',
    ];

    public function productCategory ()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function orders ()
    {
        return $this->hasMany(Order::class);
    }

    public function basket()
    {
        return $this->hasOne(Basket::class);
    }
}

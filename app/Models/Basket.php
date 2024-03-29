<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'count',
        'product_id',
    ];

    public function product ()
    {
        return $this->belongsTo(Product::class);
    }
}

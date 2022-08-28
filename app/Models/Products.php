<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'vendor',
        'date_start',
        'date_end',
        'status',
        'price',
        'sku',
        'brand_name',
        'quantity',
        'featured',
        'active',
        'condition',
        'type',
        'category',
    ];
}

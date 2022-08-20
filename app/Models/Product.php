<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'sku',
        'barcode',
        'unit',
        'brand',
        'category',
        'model',
        'qty',
        'bussnes_location',
        'weight',
        'total_weight',
        'description',
        'exe_tex',
        'inc_tex',
        'total_tex',
        'image',
        'status',
        'created_at',
        'updated_at',
    ];
}

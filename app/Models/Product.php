<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'beand',
        'small_description',
        'description',
        'description',
        'original_price',
        'additional_price',
        'selling_price',
        'quantity',
        'trending',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];
}

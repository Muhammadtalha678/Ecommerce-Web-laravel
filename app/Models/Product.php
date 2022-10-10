<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
   protected $fillable = [
   		'product_name',
     	'slug',
     	'product_short_des',
     	'product_long_des',
     	'selling_price',
     	'original_price',
     	'qty',
     	'product_category_name',
     	'product_subcategory_name',
     	'product_category_id',
     	'product_subcategory_id',
     	'trending',
     	'status',
     	'tax',
     	'product_sale',
        'product_new',
     	'product_img',
   ];
}

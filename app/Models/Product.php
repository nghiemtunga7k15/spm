<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
		'name', 'image', 'describe', 'feature', 'link_product_use', 'link_product_detail', 'link_document', 'status',
        'product_category', 'product_view',
	];
}

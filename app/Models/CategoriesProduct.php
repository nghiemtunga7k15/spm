<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesProduct extends Model
{
    protected $table = 'product_categories';

    protected $primarykey = 'id';

    protected $guarded = [];

}

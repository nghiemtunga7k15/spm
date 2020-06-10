<?php

namespace App\Models;

use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class CategoriesPost extends Model
{
    protected $table = 'post_categories';

    protected $fillable = [
		'name', 'describe', 'count_category_post', 'status',
	];

    public function post() {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}

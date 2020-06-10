<?php

namespace App\Models;

use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    protected $fillable = [
		'name', 'count_use_tag', 'describe',
	];
    protected $table = 'post_tags';

    public function post() {
        return $this->belongsToMany(Post::class, 'post_tagspost', 'tagpost_id', 'post_id');
    }

 //    public function post_tagpost() {
	// 	return $this->hasMany(Post_TagPost::class);
	// }
}

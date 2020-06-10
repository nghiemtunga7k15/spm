<?php

namespace App\Models;

use App\Models\TagPost;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post_TagPost extends Model
{
	public function post() {
		return $this->belongsTo(Post::class, 'post_id');
	}

    public function tagpost() {
		return $this->belongsTo(TagPost::class, 'tagpost_id');
	}
}

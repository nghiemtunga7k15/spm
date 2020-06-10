<?php

namespace App\Models;

use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
		'post_id', 'comment_id', 'comment_content', 'reply_id', 'reply_content', 'user_name', 'user_email', 'comment_file',
	];

    public function post() {
		return $this->belongsTo(Post::class);
	}
}

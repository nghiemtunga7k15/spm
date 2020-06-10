<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\CategoriesPost;
use App\Models\TagPost;
// use App\Models\Post_TagPost;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
		'name', 'image', 'describe', 'feature', 'category_name', 'post_view', 'post_share', 'tag_id', 'comment_count',
        'post_file', 'post_status', 'post_time', 'note', 'post_link', 'category_id', 'user_id',
	];

    public function comment() {
		return $this->hasMany(Comment::class);
	}

	public function categories_post() {
        return $this->belongsTo(CategoriesPost::class, 'category_id');
    }

    public function tag_post() {
        return $this->belongsToMany(TagPost::class, 'post_tagspost', 'post_id', 'tagpost_id');
    }

	// public function post_tagpost() {
	// 	return $this->hasMany(Post_TagPost::class);
	// }

    public function users_id() {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;
use App\Models\CategoriesProduct;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\CategoriesPost;
use App\Models\TagPost;
use App\Models\Post_TagPost;
use App\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cookie;
use Session;

class BlogController extends Controller
{
    public function index() {
        $data['features']  = Post::orderBy('post_view', 'desc')->where('post_status', 1)->limit(8)->get();
        // $posts = Post::where('post_status', 1)->limit(2)->get();
        $data['posts'] = Post::orderBy('post_view', 'desc')->limit(5)->get();
        $data['tops'] = Post::orderBy('id', 'asc')->where('post_status', 1)->limit(8)->get();
        $data['post_news'] = Post::orderBy('id', 'asc')->limit(6)->get();
        $data['todays'] = Post::orderBy('id', 'asc')->limit(5)->get();
        // $data['todays'] = Post::whereYear('post_time', '2020')->limit(5)->get();
        $data['categories_posts'] = CategoriesPost::paginate(10);
        $data['categories'] = CategoriesProduct::all();
        return view('online.blog.blog', $data);
    }

    public function menu($id){
        $data['hots'] = Post::where('category_id', $id)->orderBy('post_view', 'desc')->limit(4)->get();
        $data['ps'] = Post::where('category_id', $id)->paginate(5);
        $data['posts'] = Post::orderBy('post_view', 'desc')->limit(5)->get();
        $sessionView = Session::get('post_view'. "." .$id);
        $data['post'] = Post::findOrFail($id);
        $data['categories'] = CategoriesProduct::all();
        if (!$sessionView) { //nếu chưa có session
        Session::put('post_view'.".".$id, 1); //set giá trị cho session
        $data['post']->increment('post_view');
        }
        $data['categories_posts'] = CategoriesPost::paginate(9);
        $data['categoriesposts'] = CategoriesPost::find($id);
        $data['post_news'] = Post::orderBy('id', 'asc')->limit(5)->get();
        $data['post_comments'] = Post::orderBy('comment_count', 'desc')->limit(5)->get();
        return view('online.blog.menu', $data);
    }

    public function news($id){

        //đếm số lượt xem trang
        $data['date'] = Post::findOrFail($id)->get('post_time');
        $sessionView = Session::get('post_view'. "." .$id);
        $data['post'] = Post::findOrFail($id);
        $data['categories'] = CategoriesProduct::all();
        if (!$sessionView) { //nếu chưa có session
        Session::put('post_view'.".".$id, 1); //set giá trị cho session
        $data['post']->increment('post_view');
        }
        $data['posts'] = Post::orderBy('post_view', 'desc')->limit(5)->get();
        $data['categoriesposts'] = CategoriesPost::find($id);
        $data['categories_posts'] = CategoriesPost::paginate(9);
        $data['post_news'] = Post::orderBy('id', 'asc')->limit(5)->get();
        $data['post_comments'] = Post::orderBy('comment_count', 'desc')->limit(5)->get();
        return view('online.blog.news', $data);
    }

    public function author($id){
        $data['ps'] = Post::where('user_id', $id)->paginate(5);
        $data['posts'] = Post::orderBy('post_view', 'desc')->limit(5)->get();
        $sessionView = Session::get('post_view'. "." .$id);
        $data['post'] = Post::findOrFail($id);
        $data['categories'] = CategoriesProduct::all();
        if (!$sessionView) { //nếu chưa có session
        Session::put('post_view'.".".$id, 1); //set giá trị cho session
        $data['post']->increment('post_view');
        }
        $data['categories_posts'] = CategoriesPost::paginate(9);
        $data['user'] = User::find($id);
        $data['categoriesposts'] = CategoriesPost::find($id);
        $data['post_news'] = Post::orderBy('id', 'asc')->limit(5)->get();
        $data['post_comments'] = Post::orderBy('comment_count', 'desc')->limit(5)->get();
        return view('online.blog.author', $data);
    }

    public function tag($id){
        $data['posts'] = Post::orderBy('post_view', 'desc')->limit(5)->get();
        $sessionView = Session::get('post_view'. "." .$id);
        $data['post'] = Post::findOrFail($id);
        $data['categories'] = CategoriesProduct::all();
        if (!$sessionView) { //nếu chưa có session
        Session::put('post_view'.".".$id, 1); //set giá trị cho session
        $data['post']->increment('post_view');
        }
        $data['categories_posts'] = CategoriesPost::paginate(9);
        $data['tag'] = TagPost::find($id);
        $data['categoriesposts'] = CategoriesPost::find($id);
        $data['post_news'] = Post::orderBy('id', 'asc')->limit(5)->get();
        $data['post_comments'] = Post::orderBy('comment_count', 'desc')->limit(5)->get();
        return view('online.blog.tag', $data);
    }
}

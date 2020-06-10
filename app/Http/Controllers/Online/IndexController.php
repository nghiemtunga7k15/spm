<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CategoriesProduct;
use App\Models\CategoriesPost;
use DB;
//use http\Cookie;
use Illuminate\Http\Request;
// use Illuminate\Pagination\LengthAwarePaginator;
//use Illuminate\Support\Facades\Cookie;
use Cookie;


class IndexController extends Controller
{
	public function index(Request $request) {
        $data['categories_posts'] = CategoriesPost::paginate(9);
        $data['products'] = product::paginate(8);
        $data['categories'] = CategoriesProduct::all();
        $data['categoriespostss'] = CategoriesPost::all();
        $data['listproductdesc']= DB::table('products')
            ->orderBy('id', 'desc')
            ->paginate(4);
 		return view('online.index.index',$data);
	}
    public function quickDetail(Request $request)
    {
        $product = product::find($request->id);
        $categorys = CategoriesPost::all();
        //return response()->json($data["productDetail"]);
        $html = view('online.index.detail_speed', compact('product','categorys'))->render();
        return response()->json(['html' => $html]);
    }
	public function show($id)
	{
		$product = Product::find($id);
		return view('online.index.index')->with([
			'product' => $product,
		]);
	}
}

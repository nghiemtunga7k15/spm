<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;
use App\Models\CategoriesPost;
use App\Models\Product;
use App\Models\features;
use App\Models\featuresDescription;
use App\Models\CategoriesProduct;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use DB;
class ShopController extends Controller
{
    public function index(Request $request)
    {
        $data['products'] = Product::paginate(8);
        $data['categories'] = CategoriesProduct::all();
        $data['listproductdesc'] = DB::table('products')
            ->orderBy('id', 'desc')
            ->paginate(4);
        $data['categories_posts'] = CategoriesPost::paginate(9);
        return view('online.shop.shop', $data);
    }

    public function quickDetail(Request $request)
    {
        $product = product::find($request->id);
        $categories = CategoriesPost::all();
        //return response()->json($data["productDetail"]);
        $html = view('online.shop.detail_speed', compact('product', 'categories'))->render();
        return response()->json(['html' => $html]);
    }

    public function productByCategory($id)
    {
        $data['products'] =DB::table('products')->where('product_category',$id)->get();
        $data['categories'] = CategoriesProduct::all();
        $data['categories2'] = CategoriesProduct::find($id);
        $data['categories_posts'] = CategoriesPost::paginate(9);
        $data['listproductdesc'] = DB::table('products')->orderBy('id', 'desc')->paginate(4);
        $data['categoriespostss'] = CategoriesPost::get();
//        dd($data);
        return view('online.shop.productByCategory', $data);
    }
    public function landingDetail($id){
        $data['product'] = product::find($id);
        $data['productByCategory'] = product::all();
        $data['features'] = features::all();
        $data['categories'] = CategoriesProduct::all();
        $data['categories_posts'] = CategoriesPost::paginate(9);
        $data['featuresDescription']=featuresDescription::all();
        if ($data['product']->landing_pages==1){
            return view('online.shop.landing1',$data);
        }
        else if ($data['product']->landing_pages==2) {
            return view('online.shop.landing2',$data);
        }
        else{
            echo 'not landing page';
        }
    }
}

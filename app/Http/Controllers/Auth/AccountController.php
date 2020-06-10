<?php

namespace App\Http\Controllers\Auth;

use App\Models\CategoriesPost;
use App\Models\CategoriesProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DateTime;
use DB;
class AccountController extends Controller
{
    public function pay(Request $request) {
        // try {
        $option = 1;
        // $url_login = config('system.protocol') . config('system.url') . config('system.prefix_login') .
        //     config('system.uri.account.login');
        $url_login  = 'http://devapi.hacklike.biz/api/payment-bk';
        $timestamp=time();
        $param = [
            'mrc_order_id' => $request->mrc_order_id.$timestamp,
            'total_amount' => $request->total_amount,
            'description' => $request->description,
            'url_success' => 'https://stackoverflow.com/questions/5141910/javascript-location-href-to-open-in-new-window-tab',
        ];

        $curl = $this->curl_connect->curl_set_post($option, $url_login, $param, "POST");
        $res = $this->curl_connect->curl_get($curl);
//        dd($res);
        if ( (isset($res->data) && $res->data->code == 2)){
            return view('account.info',
                [
                    'mrc_order_id_err' => (isset($res->data->message->mrc_order_id)) ? $res->data->message->mrc_order_id[0] : '' ,
                    'total_amount_err' => (isset($res->data->message->total_amount)) ? $res->data->message->total_amount[0] : '' ,
                    'description_err' => (isset($res->data->message->description)) ? $res->data->message->description[0] : '' ,
                ]);
        }else if ($res->data->code == 7 ) {
            return view('account.info',
                [
                    'order_err' => (isset($res->data->message)) ? $res->data->message[0] : ''  ,
                ]);
        }else{
            return redirect()->away($res->data->data->payment_url);
        }
    }

    public function payUser(Request $request) {
        $data['products'] = Product::paginate(8);
        $data['categories'] = CategoriesProduct::all();
        $data['listproductdesc'] = DB::table('products')
            ->orderBy('id', 'desc')
            ->paginate(4);
        $data['categories_posts'] = CategoriesPost::paginate(9);
        return view('account.payment',$data);
    }
    public function profileUser() {
        $data['products'] = Product::paginate(8);
        $data['categories'] = CategoriesProduct::all();
        $data['listproductdesc'] = DB::table('products')
            ->orderBy('id', 'desc')
            ->paginate(4);
        $data['categories_posts'] = CategoriesPost::paginate(9);
        return view('account.profile',$data);
    }
}

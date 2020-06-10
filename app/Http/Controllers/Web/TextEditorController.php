<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cookie;

class TextEditorController extends Controller
{
    public function index(Request $request) {
        // try {
        //     $limit = '?limit=';
        //     if($request->limit) {
        //         $limit = $limit.$request->limit;
        //     }
        //     $page = '&page=';
        //     if($request->page) {
        //         $page = $page.$request->page;
        //     }

        //     $option = 1;
        //     $url = config('system.protocol').config('system.url').config('system.prefix_api')
        //             .config('system.uri.buff_eye.list').$limit.$page;

        //     $cookie_data = Cookie::get('auth_user');
        //     $user = json_decode($cookie_data);
        //     $token = 'Authorization: JWT '.$user->token;

        //     $curl = $this->curl_connect->curl_set_get($option, $url, $token);
        //     $buff_eye = $this->curl_connect->curl_get($curl);

        //     if (isset($buff_eye->data)) {
        //         $paginator = new LengthAwarePaginator($buff_eye->data, $buff_eye->total, $buff_eye->limit, $buff_eye->page, [
        //             'path' => $request->url(),
        //             'query' => $request->query(),
        //         ]);

        //         if ($request->ajax()) {
        //             $view = view('buff_eye.list_buff_eye_table', ['buff_eyes' => $paginator])->render();
        //             $data = [
        //                 'code' => 200,
        //                 'data' => $view
        //             ];
        //             return response()->json($data);
        //         } else {
        //             return view('buff_eye.list_buff_eye', ['buff_eyes' => $paginator]);
        //         }
        //     }
        // } catch (\Exception $e) {
        //     $res = [
        //         'code' => $e->getCode(),
        //         'message' => $e->getMessage()
        //     ];
        //     return response()->json($res);
        // }
    }

//     public function detail(Request $request) {
//         try {
//             $option = 1;
//             $url = config('system.protocol').config('system.url').config('system.prefix_api')
//                 .config('system.uri.buff_eye.detail').'/'.$request->id;

//             $cookie_data = Cookie::get('auth_user');
//             $user = json_decode($cookie_data);
//             $token = 'Authorization: JWT '.$user->token;

//             $curl = $this->curl_connect->curl_set_get($option, $url, $token);
//             $buff_eye = $this->curl_connect->curl_get($curl);

//             return response()->json(['live' => $buff_eye]);
//         } catch (\Exception $e) {
//             $res = [
//                 'code' => $e->getCode(),
//                 'message' => $e->getMessage()
//             ];
//             return response()->json($res);
//         }
//     }

    public function create(Request $request) {
//         try {
//             $request->validate([
//                 'video_id' => 'required',
//                 'time_buff' => 'numeric|min:0',
//                 'view' => 'numeric|min:0',
//             ]);

//             $option = 1;
//             $url = config('system.protocol').config('system.url').config('system.prefix_api')
//                 .config('system.uri.buff_eye.create');

//             $param = [
//                 'video_id' => $request->video_id,
//                 'view' => $request->eye_num,
//                 'note' => $request->note,
//                 'time_value' => $request->time_buff,
//             ];

//             if($request->time_type == 'delay') {
//                 $param['time_type'] = 0;
//             } else {
//                 $param['time_type'] = 1;
//             }

//             $cookie_data = Cookie::get('auth_user');
//             $user = json_decode($cookie_data);
//             $token = 'Authorization: JWT '.$user->token;

//             $curl = $this->curl_connect->curl_set_post($option, $url, $param, "POST", $token);
//             $buff_eye = $this->curl_connect->curl_get($curl);

//             if ($buff_eye->code == 200) {
//                 return redirect(route('eye.index'));
//             } else {
//                 $res = [
//                     'code' => $buff_eye->code,
//                     'message' => $buff_eye->data->msg,
//                 ];
//                 return response()->json($res);
//             }
//         } catch (\Exception $e) {
//             $res = [
//                 'code' => $e->getCode(),
//                 'message' => $e->getMessage(),
//             ];
//             return response()->json($res);
//         }
        return view('admin.text_editor.create_text_editor');
    }

//     public function update(Request $request) {
//         try {
//             $option = 1;
//             $url = config('system.protocol').config('system.url').config('system.prefix_api')
//                 .config('system.uri.buff_eye.update').'/'.$request->id;

//             $param = [
//                 'video_id' => $request->video_id,
//                 'note' => $request->note,
//             ];

//             $cookie_data = Cookie::get('auth_user');
//             $user = json_decode($cookie_data);
//             $token = 'Authorization: JWT '.$user->token;

//             $curl = $this->curl_connect->curl_set_post($option, $url, $param, "PUT", $token);
//             $buff_eye = $this->curl_connect->curl_get($curl);

//             if ($buff_eye->code == 200) {
//                 return response()->json($buff_eye);
//             } else {
//                 $res = [
//                     'code' => $buff_eye->code,
//                     'message' => $buff_eye->data->msg,
//                 ];
//                 return response()->json($res);
//             }
//         } catch (\Exception $e) {
//             $res = [
//                 'code' => $e->getCode(),
//                 'message' => $e->getMessage(),
//             ];
//             return response()->json($res);
//         }
//     }

//     public function delete(Request $request) {
//         try {
//             $request->validate([
//                 'id' => 'required',
//             ]);

//             $option = 1;
//             $url = config('system.protocol').config('system.url').config('system.prefix_api')
//                 .config('system.uri.buff_eye.delete').'/'.$request->id;
//             $param = [];

//             $cookie_data = Cookie::get('auth_user');
//             $user = json_decode($cookie_data);
//             $token = 'Authorization: JWT '.$user->token;

//             $curl = $this->curl_connect->curl_set_post($option, $url, $param, "DELETE", $token);
//             $buff_eye = $this->curl_connect->curl_get($curl);

//             $res = [
//                 'code' => $buff_eye->code,
//                 'data' => $buff_eye->data->msg,
//             ];
//             return response()->json($res);
//         } catch (\Exception $e) {
//             $res = [
//                 'code' => $e->getCode(),
//                 'message' => $e->getMessage()
//             ];
//             return response()->json($res);
//         }
//     }

//     public function search(Request $request) {
//         try {
//             $limit = '?limit=';
//             if($request->limit) {
//                 $limit = $limit.$request->limit;
//             }
//             $page = '&page=';
//             if($request->page) {
//                 $page = $page.$request->page;
//             }
//             $id = '&id=';
//             if($request->id) {
//                 $id = $id.$request->id;
//             }

//             $option = 1;
//             $url = config('system.protocol').config('system.url').config('system.prefix_api')
//                 .config('system.uri.buff_eye.search').$limit.$page.$id;

//             $cookie_data = Cookie::get('auth_user');
//             $user = json_decode($cookie_data);
//             $token = 'Authorization: JWT '.$user->token;

//             $curl = $this->curl_connect->curl_set_get($option, $url, $token);
//             $buff_eye = $this->curl_connect->curl_get($curl);

//             if ($buff_eye->code == 200) {
// //                $paginator = new LengthAwarePaginator($buff_eye->data, $buff_eye->total, $buff_eye->limit, $buff_eye->page, [
// //                    'path' => $request->url(),
// //                    'query' => $request->query(),
// //                ]);

// //                if ($request->ajax()) {
//                     $view = view('buff_eye.search_buff_eye_table', ['buff_eyes' => $buff_eye->data])->render();
//                     $data = [
//                         'code' => 200,
//                         'data' => $view
//                     ];
//                     return response()->json($data);
// //                }
// //                  else {
// //                    return view('buff_eye.list_buff_eye', ['buff_eyes' => $paginator]);
// //                }
//             } else {
//                 return response()->json($buff_eye);
//             }
//         } catch (\Exception $e) {
//             $res = [
//                 'code' => $e->getCode(),
//                 'message' => $e->getMessage()
//             ];
//             return response()->json($res);
//         }
//     }
}

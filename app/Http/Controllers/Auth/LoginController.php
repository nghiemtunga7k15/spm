<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Repositories\CurlConnectionRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\RedirectResponse;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    use AuthenticatesUsers;
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $curl_connect;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @param CurlConnectionRepository $curl_connect
     */
    public function __construct(CurlConnectionRepository $curl_connect)
    {
        $this->middleware('guest')->except('logout');
         $this->curl_connect = $curl_connect;
    }
    public function redirectLogin(Request $request)
    {


//        dd(Cookie::get('auth_user')->data->name);
        if ($request->cookie('auth_user')) {
            return redirect(route('online-home'));
        } else {
            return view('pages.login');
        }
    }
    public function login(Request $request){

         try {
//             header('Location: '.);
            $option = 1;
            // $url_login = config('system.protocol') . config('system.url') . config('system.prefix_login') .
            //     config('system.uri.account.login');
            $url_login  = 'http://devapi.hacklike.biz/api/users/login/bk';
            $param = [
                'username' => $request->email,
                'password' => $request->password
            ];
            $curl = $this->curl_connect->curl_set_post($option, $url_login, $param, "POST");
            $res = $this->curl_connect->curl_get($curl);
            $user = isset($res->code) && $res->code == 200 ?  json_encode($res->data->user) : null ;
            if (isset($res->code) && $res->code == 200) {
                return redirect(route('online-home'))->withCookie(cookie()->forever('auth_user', $user))
                    ->with('login_success', 'Login success');

            } else if ( $res->code == 404  && $res->err->code == 2){
                    return view('pages.login',
                    [
                        'username' => (isset($res->err->message->username)) ? $res->err->message->username[0] : '' ,
                        'password' => (isset($res->err->message->password)) ? $res->err->message->password[0] : '' ,
                    ]);
            } else if ( $res->code == 404  && $res->err->code == 4  ) {
                    return redirect()->back()->with('error',(isset($res->err->message)) ? $res->err->message[0] : '');
            }else {
                return back()->with('error', 'Đăng nhập thất bại');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', ' Đăng nhập thất bại');
        }



    }
    public function logout(Request $request)
    {
        setcookie("auth_user", 1 , time()-3600);
        return redirect(route('online-home'))->withCookie(Cookie::forget('get_user'));
    }
    public function checkLoginSPM(Request $request)
    {
        if (isset($_COOKIE['auth_user'])){
            try {
                $token = $_COOKIE['auth_user'];
                $url_get_token  = 'http://devapi.hacklike.biz/api/users/validate-token?token='.$token;
                $curl_get_token = $this->curl_connect->curl_set_post(1, $url_get_token, [], "POST");
                $res = $this->curl_connect->curl_get($curl_get_token);
                if (isset($res->code) && $res->code == 200) {
                    $user=$res->data->user;
                    return redirect(route('online-home'))->withCookie(cookie()->forever('get_user', json_encode($user)))
                        ->with('login_success', 'Login success');
                }
            }catch (\Exception $e) {
                return redirect()->back()->with('error', ' Đăng nhập thất bại');
            }

        }else{
            return response()->json(['code' => 400, 'data' => 'False' ]);
        }
    }

    public function urlCallback(Request $request) {
        if (isset($_GET['access_token'])){
            $access_token = $_GET['access_token'];
            $url_get_token  = 'http://devapi.hacklike.biz/api/users/facebook-info?access_token='.$access_token;
            $curl = $this->curl_connect->curl_set_get( 1 , $url_get_token, null);
            $res= $this->curl_connect->curl_get($curl);
            if (isset($res->code) && $res->code == 200 && $res->data->user->code == 0) {
                $user=$res->data->user;
                return redirect(route('online-home'))->withCookie(cookie()->forever('auth_user', json_encode($user->data)))
                    ->with('login_success', 'Login success');
            }
            return response()->json(['code' => 200, 'data' => 'OK' , 'access_token' => $access_token]);
        }else{
            return response()->json(['code' => 400, 'data' => 'False' ]);
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

// use App\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


use App\Repositories\CurlConnectionRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $curl_connect;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Create a new controller instance.
     *
     * @param CurlConnectionRepository $curl_connect
     */
    public function __construct(CurlConnectionRepository $curl_connect)
    {
        $this->middleware('guest');
         $this->curl_connect = $curl_connect;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function redirectRegister(Request $request) {
        if ($request->cookie('auth_user')) {
            return redirect(route('/'));
        } else {
            return view('pages.register');
        }
    }

    public function register(Request $request)

    {
//         $param = [
//                 'email' => $request->email,
//                 'password' => $request->password,
//                 'name' => $request->full_name,
//                 'phone' => $request->phone_number,
//             ];
//
//          dd($param);

        try {

            $request->validate([
                'full_name' => 'required',
                'email' => 'required',
                'password' => 'required|confirmed',
                'phone_number' => 'required',
            ]);
            $option = 1;
            $url_login  = 'http://devapi.hacklike.biz/api/users/register/bk';
            $param = [
                'email' => $request->email,
                'password' => $request->password,
                'password_confirmation' => $request->password_confirmation,
                'name' => $request->full_name,
                'phone' => $request->phone_number,
            ];
//            if($param->password_confirmation != $param->password){
//                $err_password_confirmation='mật khẩu không trùng khớp';
//                return view('pages.register',$err_password_confirmation);
//            }
            $curl = $this->curl_connect->curl_set_post($option, $url_login, $param, "POST");
            $res = $this->curl_connect->curl_get($curl);

            if (isset($res->code) && $res->code == 200) {
                return redirect(route('login'))->with('success', 'Đăng ký thành công');
            }else if ( (isset($res->code) && $res->code == 404 &&  $res->err->code == 2) ||  $res->err->code == 500 ) {
                return view('pages.register',
                    [
                        'err_email' => (isset($res->err->message->email)) ? $res->err->message->email[0] : '' ,
                        'err_password' => (isset($res->err->message->password)) ? $res->err->message->password[0] : '' ,
                        'err_phone' => (isset($res->err->message->phone)) ? $res->err->message->phone[0] : '' ,
                        'err_phone_exits' => (isset($res->err->code) && $res->err->code == 500 ) ? 'Số điện thoại đã tồn tại' : '' ,
                    ]);
            } else {
                return back()->with('error', 'Đăng ký thất bại');
            }
        } catch (\Exception $e) {

            return back()->with('error', ' Vui lòng nhập đầy đủ và đúng định dạng');

        }
    }

}

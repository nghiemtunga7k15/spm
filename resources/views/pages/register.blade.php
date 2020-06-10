
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Tăng tương tác ảo">
    <meta name="author" content="VNP Software">
    <meta name="keyword" content="livestream, bufflike, buffsub, buffview, seed, comment">
    <title>CoreUI Pro Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="http://buff.hacklike.biz/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="http://buff.hacklike.biz/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://buff.hacklike.biz/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="http://buff.hacklike.biz/css/style.css" rel="stylesheet">
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Đăng ký</h1>

                     @if(!empty($register_success))
                                <span class="error">{{$register_success}}</span><br>
                            @endif

                    <p class="text-muted"></p>
                    <form action="" method="POST">

                        <input type="hidden" name="_token" value="GBIggagV63oepgw3VsomY2XOsNDHqbNDhkEBzMHC">
                         {{csrf_field()}}
                        @if(Session::has('error'))
                            <p class="alert alert-danger">{{session::get('error')}}</p>
                        @endif
                        @if(Session::has('success'))
                            <p class="alert alert-success">{{session::get('success')}}</p>
                        @endif
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Tên" name="full_name">
                        </div>
                        @if(!empty($err_email))
                                <span class="error">{{$err_email}}</span><br>
                            @endif
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input class="form-control" type="email" placeholder="Email" name="email">
                        </div>
                        @if(!empty($err_password))
                                    <span class="error">{{$err_password}}</span>
                            @endif
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </span>
                            </div>

                            <input class="form-control" type="password" placeholder="Mật khẩu" name="password">
                        </div>
                        @if(!empty($err_password_confirmation))
                            <span>{{$err_password_confirmation}}</span>
                        @endif
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon-lock"></i>
                            </span>
                            </div>
                            <input class="form-control" type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation">
                        </div>
                            @if(!empty($err_phone))
                                    <span class="error">{{$err_phone}}</span>
                            @elseif(!empty($err_phone_exits))
                                <span class="error">{{$err_phone_exits}}</span>
                            @endif
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-phone"></i>
                            </span>
                            </div>

                            <input class="form-control" type="phone_number" placeholder="số điện thoại" name="phone_number">
                        </div>
                        <button class="btn btn-block btn-success" type="submit">Tạo tài khoản</button>
                    </form>
                    <br>
                    <a href="{{ asset('login') }}" class="pull-right" style="color: #4dbd74;">đăng nhập</a>
                </div>

                <style>
                    .error{
                        color:red;
                        font-style: italic;
                    }
                </style>

            </div>
        </div>
    </div>
</div>
<!-- Bootstrap and necessary plugins-->
<script src="http://buff.hacklike.biz/vendors/jquery/js/jquery.min.js"></script>
<script src="http://buff.hacklike.biz/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="http://buff.hacklike.biz/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="http://buff.hacklike.biz/vendors/@coreui/coreui-pro/js/coreui.min.js"></script>
</body>
</html>

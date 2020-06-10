@extends('online.app')

@section('header')
    <link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')
    <div class="wraper">
    <div class="warper-content">
        <div class="col-md-2 nav nav-bar">
            <ul class="list-group">
                <li class="">
                    <a href="{{route('profileUser')}}" class="list-group-item"><i class="fa fa-user-circle-o"></i>&emsp;Tài khoản của tôi</a>
{{--                    <ul class="" role="menu">--}}
{{--                        <li ><a href="{{route('payUser')}}" class="list-group-item"><i class="fa fa-suitcase"></i>&emsp;hồ sơ</a></li>--}}
{{--                        <li ><a href="" class="list-group-item"><i class="fa fa-bank"></i>&emsp;Quản lý số dư</a></li>--}}
{{--                        <li ><a href="" class="list-group-item"><i class="fa fa-key"></i>&emsp;đổi mật khẩu</a></li>--}}
{{--                    </ul>--}}
                </li>
                <li ><a href="{{route('paymentUser')}}" class="list-group-item"><i class="fa fa-bank"></i>&emsp;Quản lý số dư</a></li>
                <li ><a href="" class="list-group-item"><i class="fa fa-shopping-bag"></i>&emsp;Thống kê chi tiêu</a></li>
                <li ><a href="" class="list-group-item"><i class="fa fa-key"></i>&emsp;Đổi mật khẩu</a></li>
            </ul>
        </div>
        <div class="col-md-10 warper-content-info">
            <div class="content">
                @yield('content-account')
            </div>

        </div>
    </div>
    </div>
    <style>
        .wraper{
            min-height: 100vh;
            background: #DEDDFD;
            padding: 20px 30px;
        }
        .warper-content-info{
            padding: 0;
        }
        .warper-content{
            min-height: 500px;


        }
        .nav-bar{
            padding: 0;
        }
        .list-group{
            background: #DEDDFD;
            /*min-height: 100vh;*/

        }
        .warper-content ul li{
            list-style: none;
            border-bottom: 1px solid #fff;
        }
        .list-group-item{
            border: none;
            background: #DEDDFD;
            text-transform: capitalize;
        }
        .content{
            background: #f5f5f5;
            min-height: 100vh;
        }
        .fa{
            color: #1e2f7f;
        }
        .nav .open>a, .nav .open>a:focus, .nav .open>a:hover,.nav .open>a:hover .fa,.nav .open>a:focus .fa {
            color: #fff;
        }
        .dropdown-menu{
            padding: 10px;
        }

    </style>
@endsection

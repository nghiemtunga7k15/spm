<link rel="stylesheet" href="{{asset('template/css/style.css')}}">
<header itemtype="https://schema.org/WPHeader" itemscope="itemscope" id="masthead" role="banner">
    <div id="header" class="main-header-bar-wrap mobile-header ">
        <div class="main-header-bar">
            <div class="container visible-xs">
                <div class="mobile-menu-buttons">
                    <div class="button-wrap">
                        <a href="javascript:void(0)" class="menu-toggle" rel="main-menu">
                            <img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/menu.png" alt="menu">
                        </a>
                    </div>
                </div>
                <div class="header-logo">
                    <a href="{{route('online-home')}}" class="custom-mobile-logo-link" rel="home" itemprop="url" >
                        <img style="height: 75px;" src="{{asset('dist/img/logo.png')}}" class="mobile-header-logo" alt="logo-winerp">
                    </a>
                </div>
                <div class="search-button">
                    <a href="javascript:void(0)"></a>
                </div>
            </div>
            <div class="container hidden-xs">
                <div class="row">
                    <div class="site-branding col-md-2">
                        <div class="site-identity">
							<span class="site-logo-img">
								<a href="{{route('online-home')}}" class="custom-logo-link" rel="home" itemprop="url">
									<img src="{{asset('dist/img/logo.png')}}" class="header-logo">
								</a>
							</span>
                        </div>
                    </div>
                    <div class="main-header-bar-alignment col-md-10">
                        <nav id="menu-primary" class="menu-wrap">
                            <div class="nav-wrap main-wrap-primary">
                                <ul id="menu-main">
                                    <li class="menu-item "><a href="{{route('online-home')}}">TRANG CHỦ</a></li>
                                    <li class="menu-item dropdowns mega-dropdown">
                                        <a class="dropdown-toggle" href="{{route('online.shop.index')}}">SẢN PHẨM <span class="caret"></span></a>
                                        <div class="dropdown-menu b-none font-14 animated fadeInUp" aria-labelledby="h6-mega-dropdown">
                                            <div class="row">
                                                <div class="col-lg-3 inside-bg hidden-md-down" style="background-image:url(https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/mega-bg2.jpg);">
                                                    <div class="bg-img" style="background-color: #293fa6;">
                                                        <h4 class="text-white font-light">GIẢI PHÁP</h4>
                                                        <p class="text-white">Kinh doanh online hiệu quả</p>
                                                    </div>
                                                </div>
                                                @foreach($categories as $categories)
                                                <div class="col-lg-3">
                                                    <ul class="list-style-none">

                                                        <li>
                                                            <a href="{{asset('shop/category/'.$categories->id)}}">{{$categories->name}}
                                                                <p>{{$categories->description}}</p>
                                                            </a>

                                                        </li>
                                                    </ul>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item dropdowns mega-dropdown">
                                        <a href="{{route('online.blog.index')}}">BLOG <span
                                                class="caret"></span></a>
                                        <div class="dropdown-menu b-none font-14 animated fadeInUp"
                                             aria-labelledby="h6-mega-dropdown">
                                            <div class="row">
                                                <div class="col-lg-3 inside-bg hidden-md-down"
                                                     style="background-image:url(https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/mega-bg2.jpg);">
                                                    <div class="bg-img" style="background-color: #293fa6;">
                                                        <h4 class="text-white font-light">GIẢI PHÁP</h4>
                                                        <p class="text-white">Kinh doanh online hiệu quả</p>
                                                    </div>
                                                </div>
                                                @foreach($categories_posts as $categoriespost)
                                                    <div class="col-lg-3 col-md-4">
                                                        <ul class="list-style-none">
                                                            <li>
                                                                <a href="{{route('online.blog.menu', $categoriespost->id)}}">{{$categoriespost->name}}
                                                                    <p>{{$categoriespost->description}}</p>
                                                                </a>
{{--                                                                <p>{{$categoriespost->description}}</p>--}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item dropdowns mega-dropdown">
                                        <a href="{{route('online-home')}}">GIỚI THIỆU <span class="caret"></span></a>
                                        <div class="dropdown-menu b-none font-14 animated fadeInUp" aria-labelledby="h6-mega-dropdown">
                                            <div class="row">
                                                <div class="col-lg-3 inside-bg hidden-md-down" style="background-image:url(https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/mega-bg2.jpg);">
                                                    <div class="bg-img" style="background-color: #293fa6;">
                                                        <h4 class="text-white font-light">GIẢI PHÁP</h4>
                                                        <p class="text-white">Kinh doanh online hiệu quả</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4">
                                                    <ul class="list-style-none">
                                                        <li>
                                                            <a href="{{route('online-home')}}">Về
                                                                chúng tôi</a>
                                                            <p>Sứ mệnh và thành tựu nổi bật của VNP Software</p>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('online-home')}}">VNP
                                                                SOFTWARE là gì ?</a>
                                                            <p>Tìm hiểu thêm về VNP Software</p>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('online-home')}}">Bộ phần mềm ALL IN ONE</a>
                                                            <p>Giải pháp giải pháp hỗ trợ doanh nghiệp đã và đang kinh doanh online</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-4">
                                                    <ul class="list-style-none">
                                                        <li>
                                                            <a href="{{route('online-home')}}">Blog</a>
                                                            <p>Chia sẻ kinh nghiệm kinh doanh từ A đến Z</p>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('online-home')}}">Câu hỏi thường gặp</a>
                                                            <p>Các câu hỏi của khách hàng được trả lời thường xuyên tại đây</p>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('online-home')}}">Lịch sử nâng cấp phần mềm</a>
                                                            <p>Tìm hiểu các bản cập nhật của phần mềm</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-4">
                                                    <ul class="list-style-none">
                                                        <li><a href="{{route('online-home')}}">Tuyển dụng</a></li>
                                                        <li><a href="{{route('online-home')}}">Đăng ký Affiliates</a></li>
                                                        <li><a href="{{route('online-home')}}">Đào tạo</a></li>
                                                        <li><a href="{{route('online-home')}}">Liên hệ</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item dropdowns mega-dropdown">
                                        <a href="{{route('online-home')}}">LIÊN HỆ <span class="caret"></span></a>
                                        <div class="dropdown-menu b-none font-14 animated fadeInUp" aria-labelledby="h6-mega-dropdown">
                                            <div class="row">
                                                <div class="col-lg-3 inside-bg hidden-md-down" style="background-image:url(https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/mega-bg2.jpg);">
                                                    <div class="bg-img" style="background-color: #293fa6;">
                                                        <h4 class="text-white font-light">GIẢI PHÁP</h4>
                                                        <p class="text-white">Kinh doanh online hiệu quả</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4">
                                                    <ul class="list-style-none">
                                                        <li>
                                                            <a href="{{route('online-home')}}">Về
                                                                chúng tôi</a>
                                                            <p>Sứ mệnh và thành tựu nổi bật của VNP Software</p>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('online-home')}}">VNP
                                                                SOFTWARE là gì ?</a>
                                                            <p>Tìm hiểu thêm về VNP Software</p>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('online-home')}}">Bộ phần mềm ALL IN ONE</a>
                                                            <p>Giải pháp giải pháp hỗ trợ doanh nghiệp đã và đang kinh doanh online</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-4">
                                                    <ul class="list-style-none">
                                                        <li>
                                                            <a href="{{route('online-home')}}">Blog</a>
                                                            <p>Chia sẻ kinh nghiệm kinh doanh từ A đến Z</p>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('online-home')}}">Câu hỏi thường gặp</a>
                                                            <p>Các câu hỏi của khách hàng được trả lời thường xuyên tại đây</p>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('online-home')}}">Lịch sử nâng cấp phần mềm</a>
                                                            <p>Tìm hiểu các bản cập nhật của phần mềm</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-4">
                                                    <ul class="list-style-none">
                                                        <li><a href="{{route('online-home')}}">Tuyển dụng</a></li>
                                                        <li><a href="{{route('online-home')}}">Đăng ký Affiliates</a></li>
                                                        <li><a href="{{route('online-home')}}">Đào tạo</a></li>
                                                        <li><a href="{{route('online-home')}}">Liên hệ</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
{{--                                    <li class="menu-item">--}}
{{--                                        <div class="search-button">--}}
{{--                                            <a href="javascript:void(0)"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/find.png" alt=""></a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
                                    @if(Cookie::get('get_user')&&Cookie::get('get_user') != null)
                                    <li class="menu-item">

                                            <ul class="nav ml-auto">
                                                <li class="nav-item dropdown ">
                                                    <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                        <span class=""  style="color: #fff;">Xin chào,  {{json_decode(Cookie::get('get_user'))->name}} </span><span class="caret"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-header text-center quick_user ">
                                                            <a href="{{asset('/account')}}">Hồ Sơ Của Tôi</a> <br>
                                                            {{--                                                <a type="button" class="" data-toggle="modal" data-target="#myModal">Thông tin tài khoản</a>--}}
                                                        </div>

                                                        <a class="dropdown-item pull-right" href="{{asset('/logout')}}" style="color: #0c6fff;">Logout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                    </li>
                                    @else
                                        <li class="menu-item">
                                            <a href="{{ asset('http://login.vnpsoftware.biz/login?urlRedirect=http://vnpsoftware.biz/checkLoginSPM') }}" class="">ĐĂNG NHẬP</a>

                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('http://login.vnpsoftware.biz/register')}}" class="">ĐĂNG KÝ</a>

                                        </li>
                                    @endif
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="MenuMobile" class="menu-main-mb">
        <div class="closemenu"><a href="javascript:void(0)">×</a></div>
        <div class="logo-menu"><img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/p960x960/79083765_106706600807790_1158698544857612288_o.jpg?_nc_cat=100&_nc_ohc=q04UMTzSCNcAQmUBtDIbafb_C2fZC53kIes8jMEI4BNA9IvKq6iWV9eog&_nc_ht=scontent.fhan2-4.fna&oh=65806f684778e95f554267260fec554e&oe=5EA28D0C" alt="logo-menu"></div>
        <div class="content-menu">
            <p><a href="{{route('online-home')}}">Trang chủ</a></p>
            <p><a href="{{route('online.shop.index')}}">Sản phẩm</a></p>
            <p><a href="{{route('online.blog.index')}}">Blog</a></p>
            <p><a href="{{route('online-home')}}">Giới thiệu</a></p>
            <p><a href="{{route('online-home')}}">Liên hệ</a></p>
            <p>
                @if(Cookie::get('get_user'))
                    <a href="{{route('profileUser')}}">
                        Xin chào, {{json_decode(Cookie::get('get_user'))->name}}
                    </a>
                    <a href="{{asset('http://login.vnpsoftware.biz/logout')}}" style="color: #0c6fff;">Logout</a>


                @else
                    <a href="{{ asset('http://login.vnpsoftware.biz/login?urlRedirect=http://vnpsoftware.biz/checkLoginSPM') }}">login</a>
                @endif
            </p>
        </div>
        <div style="clear:both;"></div>
        <div class="content-menu-bottom">
            <p>CÔNG TY TNHH VNP SOFTWARE - 102 Thái Thịnh - Hà Nội<br><br>HOTLINE: 0378557797 - Email: vnpsoftware@vatgia.com</p>
        </div>
    </div>
    <style>
        #header{
            z-index: 20;
        }
        .btn-login .btn-info{
            padding: 5px 30px;
            font-size: 20px;
            background: #2c41a3;
        }
        .btn-login .btn-info:hover{
            background: #fa6018;
        }
        .nav>li>a:focus, .nav>li>a:hover{
            text-decoration: none;
            background-color: #fa6018;
            border-radius: 5px;
            /*padding: 10px;*/
        }
        .nav .open>a, .nav .open>a:focus, .nav .open>a:hover{
            background-color: #2c41a3;
        }
        .dropdown-header{
            padding: 3px 0;
        }
        @media (min-width: 768px){
            .navbar-nav>li>a{
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }
        .dropdowns .dropdown-menu {
            opacity: 0;
            top: 1000px;}
        .menu-main-mb .content-menu {
            margin: 5px 0;
        }
       .menu-main-mb .logo-menu img {
            width: 150px;
            padding: 10px 0;
        }
        header .site-logo-img img {
            width: 100%;
            margin: 15px;}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        window.onscroll = function() {myFunction()};
        var header = document.getElementById("header");
        var sticky = header.offsetTop;
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script>
        $('.close-popup a').click(function () {
            $('#PopupProduct').addClass('hide');
            $('.popup-content').addClass('hide');
        });
        $('#menu-main .menu-item').click(function() {
            $('#menu-main .menu-item').removeClass('current-menu-item');
            $(this).addClass('current-menu-item');
        });
    </script>
</header>

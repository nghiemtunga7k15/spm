@extends('online.app')

@section('header')
    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
@endsection

@section('content')
    <div id="content" class="site-content" itemtype="https://schema.org/WebSite" itemscope="itemscope">
        <div id="primary" class="content-area primary">
            <main id="main" class="site-main" role="main">
                <article id="home-page" class="home-page">
                    <div class="entry-content clear" itemprop="text">
                        <section id="slider" class="section section-banner hidden-xs">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-5 titles" data-aos="fade-right">
                                        <h1>Phần mềm hỗ trợ</h1>

                                        <p class="image"><img src="{{ asset('upload/products/'.$products[0]->image)}}" alt="All In One"></p>
                                        <p>{{$products[0]->name}}</p>
                                        <a href="#MuaNgay" class="btn btn-main">Dùng Thử free</a>
                                        <div id="MuaNgay"></div>
                                    </div>
                                    <div class="col-md-7" data-aos="fade-left">
                                        <img style="width: 90%;float: right;" src="{{asset('dist/img/bannerRight1_3-v4.png')}}" alt="">
{{--                                        <img style="height: 200px;" src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/p960x960/79083765_106706600807790_1158698544857612288_o.jpg?_nc_cat=100&_nc_ohc=q04UMTzSCNcAQmUBtDIbafb_C2fZC53kIes8jMEI4BNA9IvKq6iWV9eog&_nc_ht=scontent.fhan2-4.fna&oh=65806f684778e95f554267260fec554e&oe=5EA28D0C">--}}
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="InfoShort" class="section section-infoshort hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/2.png"
                                                alt="simple-facebook"></p>
                                        <h3 class="title"><a href="{{route('online.shop.index')}}"
                                                             title="Phần mềm Facebook">PHẦN MỀM FACEBOOK</a></h3>
                                        <p class="description">Giải pháp giúp tiếp cận và xây dựng tài nguyên khách hàng
                                            tiềm năng trên Facebook từ các Fanpage bán hàng, Group và tài khoản Facebook
                                            cá nhân.</p>
                                        <p class="link"><a href="{{route('online.shop.index')}}" title="Xem thêm"
                                                           target="_blank">Xem thêm</a></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/3.png"
                                                alt="simple-facebook"></p>
                                        <h3 class="title"><a href="{{route('online.shop.index')}}"
                                                             title="Phần mềm instagram">PHẦN MỀM INSTAGRAM</a></h3>
                                        <p class="description">Cung cấp giải pháp hỗ trợ cho việc kinh doanh online hiệu
                                            quả trên mạng xã hội Instagram. Giúp tăng follower, tăng theo dõi cho các
                                            tài khoản Instagram của bạn.</p>
                                        <p class="link"><a href="{{route('online.shop.index')}}" title="Xem thêm"
                                                           target="_blank">Xem thêm</a></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/4.png"
                                                alt="simple-facebook"></p>
                                        <h3 class="title"><a href="{{route('online.shop.index')}}"
                                                             title="Phần mềm zalo">PHẦN MỀM ZALO</a></h3>
                                        <p class="description">Giải pháp Zalo Marketing giúp tiếp cận đến 80 triệu khách
                                            hàng tiềm năng từ mạng xã hội Zalo. Kết bạn, gửi tin nhắn chăm sóc khách
                                            hàng.</p>
                                        <p class="link"><a href="{{route('online.shop.index')}}" title="Xem thêm"
                                                           target="_blank">Xem thêm</a></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/5.png"
                                                alt="simple-facebook"></p>
                                        <h3 class="title"><a href="{{route('online.shop.index')}}" title="SHOPPE">GIẢI
                                                PHÁP SHOPPE STORE</a></h3>
                                        <p class="description">Cung cấp các giải pháp marketing hoàn toàn mới, ứng dụng
                                            các công nghệ ưu việt để giúp tiếp cận và xây dựng tệp khách hàng bền vững
                                            trên Ứng dụng Shoppe.</p>
                                        <p class="link"><a href="{{route('online.shop.index')}}" title="Xem thêm"
                                                           target="_blank">Xem thêm</a></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="InfoShortMobile" class="section section-infoshort-mobile visible-xs">
                            <div class="container">
                                <h2 style="margin-bottom:20px">CUNG CẤP GIẢI PHÁP MARKETING ĐA KÊNH</h2>
                                <div class="hr"></div>
                                <div class="software facebook">
                                    <p class="image"><a href="https://atpsoftware.vn/simple-facebook"
                                                        title="Simple Facebook" target="_blank"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/simple-facebook-mb.png"
                                                alt="simple-facebook"></a></p>
                                </div>
                                <div class="software instagram">
                                    <p class="image"><a href="https://atpsoftware.vn/simple-instagram"
                                                        title="Simple Instagram" target="_blank"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/simple-instagram-mb.png"
                                                alt="simple-instagram"></a></p>
                                </div>
                                <div class="software youtube">
                                    <p class="image"><a
                                            href="https://www.youtube.com/c/atpsoftware?sub_confirmation=ATP"
                                            title="Simple Facebook" target="_blank"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/simple-youtube-mb.png"
                                                alt="youtube"></a></p>
                                </div>
                                <div class="software winerp">
                                    <p class="image"><a href="https://atpsoftware.vn/winerp" title="Phần mềm ERP"
                                                        target="_blank"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/phan-mem-erp-mb.png"
                                                alt="winerp"></a></p>
                                </div>
                            </div>
                        </section>
                        <section id="Product" class="section section-product" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 style="margin-bottom:40px">VNP - CUNG CẤP CHO BẠN NHỮNG SẢN PHẨM TỐT
                                            NHẤT</h2>
                                    </div>
                                    <div style="clear:both"></div>
                                    @foreach($products as $key => $product)
                                        <div class="col-md-3">
                                            <div id="BigAIO" class="box-product">
                                                <div class="box-hover">
                                                    <p class="button  button-quick"  data-id="" ><a href="javascript:void(0)" id="{{$product->id}}"  data-target=""  class="btn btn-default">XEM NHANH</a></p>
                                                    <p class="button button-info"><a href="{{ asset('shop/landing/'.$product->id)}}" class="btn btn-main">XEM CHI TIẾT</a></p>
                                                </div>
                                                <p class="image"><img src="{{ asset('upload/products/'.$product->image)}}" alt="All In One"></p>
                                                <div class="icon">
                                                    @foreach($categories as $key => $category)
                                                        @if($category->id==$product->product_category)
                                                            <img src="{{ asset('upload/categorys/'.$category->image)}}" alt="">
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <h3 class="title"><span>{{$product->name}}</span></h3>
                                                {{-- <p class="price">Đang Cập Nhật</p> --}}
                                                @if($product->status==1)
                                                    <p class="success">Hoàn Thành</p>
                                                @else
                                                    <p class="price">Đang thực hiện</p>
                                                @endif
                                                <p class="description">{{$product->short_describe}}</p>
                                                <p class="download"><a href="#" target="_blank" class="btn btn-second visible-xs"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/cloud-storage-download.png" alt="download"> Xem chi tiết</a></p>
                                                <p class="download"><a href="javascript:void(0)" data-id="67155" data-name="BUFF Livestream" class="btn btn-second btn-check-down hidden-xs"> SỬ DỤNG NGAY</a></p>
                                            </div>
                                        </div>
                                    @endforeach
                                <!--div class="col-md-3">
						<div id="SimpleFanpage" class="box-product">
							<div class="box-hover">
								<p class="button button-quick"><a href="javascript:void(0)" class="btn btn-default">XEM NHANH</a></p>
								<p class="button button-info"><a href="/simple-fanpage" class="btn btn-main" target="_blank">XEM CHI TIẾT</a></p>
							</div>
							<p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/simple-fanpage.png" alt="simple-fanpage"></p>
							<div class="icon"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/facebook.png" alt="Facebook"></div>
							<h3 class="title"><span>Simple Fanpage</span></h3>
							<p class="price">Đang Cập Nhật</p>
							<p class="description">Giải pháp giúp tra cứu được số điện thoại của khách hàng nhanh chóng</p>
							<p class="download"><a href="/simple-fanpage" class="btn btn-second visible-xs" target="_blank"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/cloud-storage-download.png" alt="download"> Xem chi tiết</a></p>
							<p class="download"><a href="javascript:void(0)" data-id="67065" class="btn btn-second btn-check-down hidden-xs"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/cloud-storage-download.png" alt="download"> TẢI PHẦN MỀM</a></p>
						</div>
					</div-->

                                    <div class="col-md-12">
                                        <h2 style="margin-bottom:40px">CÁC SẢN PHẨM & DỊCH VỤ MỚI</h2>
                                    </div>
                                    @foreach($listproductdesc as $key => $productdesc)
                                        <div class="col-md-3">
                                            <div id="BigAIO" class="box-product">
                                                <div class="box-hover">
                                                    <p class="button  button-quick"  data-id="" ><a href="javascript:void(0)" id="{{$productdesc->id}}"  data-target=""  class="btn btn-default">XEM NHANH</a></p>
                                                    <p class="button button-info"><a href="{{ asset('shop/landing/'.$product->id)}}" class="btn btn-main">XEM CHI TIẾT</a></p>
                                                </div>
                                                <p class="image"><img src="{{ asset('upload/products/'.$productdesc->image)}}" alt="All In One"></p>
                                                <div class="icon">
                                                    @foreach($categories as $key => $category)
                                                        @if($category->id==$productdesc->product_category)
                                                            <img src="{{ asset('upload/categorys/'.$category->image)}}" alt="">
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <h3 class="title"><span>{{$productdesc->name}}</span></h3>
                                                {{-- <p class="price">Đang Cập Nhật</p> --}}
                                                @if($productdesc->status==1)
                                                    <p class="success">Hoàn Thành</p>
                                                @else
                                                    <p class="price">Đang thực hiện</p>
                                                @endif
                                                <p class="description">{{$productdesc->short_describe}}</p>
                                                <p class="download"><a href="#" target="_blank" class="btn btn-second visible-xs"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/cloud-storage-download.png" alt="download"> Xem chi tiết</a></p>
                                                <p class="download"><a href="javascript:void(0)" data-id="67155" data-name="BUFF Livestream" class="btn btn-second btn-check-down hidden-xs"> SỬ DỤNG NGAY</a></p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <section id="PopupProduct" class="section section-popupproduct affix hide">
                            <div id="BigAIOPopup" class="popup-content hide">
                                <div class="close-popup"><a href="javascript:void(0)">×</a></div>
                                <div class="row" id="contentDetailProduct">

                                </div>
                            </div>
                        </section>
                        <section id="Team" class="section section-team hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Khách hàng của chúng tôi</h2>
                                        <p class="sub-title"></p>
                                        <div class="hr"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="{{asset('dist/img/avatar.png')}}" alt="All In One"></p>
                                        <h4 class="title">Tôi đã có rất nhiều khách hàng</h4>
                                        <p class="position"><span>Bùi Đại</span></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="{{asset('dist/img/avatar2.png')}}" alt="All In One"></p>
                                        <h4 class="title">Mình rất hài lòng</h4>
                                        <p class="position"><span>Trần Thịnh Lâm</span></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="{{asset('dist/img/avatar04.png')}}" alt="All In One"></p>
                                        <h4 class="title">Tuyệt vời</h4>
                                        <p class="position"><span>Nguyễn Đức</span></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="{{asset('dist/img/avatar3.png')}}" alt="All In One"></p>
                                        <h4 class="title">doanh thu của tôi đang tăng</h4>
                                        <p class="position"><span>Trần Trí Linh</span></p>
                                    </div>
{{--                                    <div style="clear:both"></div>--}}
                                    <div class="col-md-2">
                                        <p class="image"><img src="{{asset('dist/img/avatar5.png')}}" alt="All In One"></p>
                                        <h4 class="title">chất lượng tốt. 5 sao</h4>
                                        <p class="position"><span>Nguyễn Vĩnh Lộc</span></p>
                                    </div>

                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </section>
                        <section id="Vision" class="section section-vision hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>XÂY DỰNG NỀN TẢNG<br>MARKETING - BÁN HÀNG - CHĂM SÓC KHÁCH HÀNG ĐA KÊNH</h2>
                                        <p class="sub-title">VNP SOFTWARE cung cấp các GIẢI PHÁP MARKETING giúp TỰ ĐỘNG
                                            HÓA được nhiều hoạt động thiết thực<br>trong quá trình làm marketing, bán
                                            hàng và chăm sóc khách hàng trên Facebook, Zalo và Instagram.</p>
                                        <div class="hr"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-6">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/6.png"
                                                alt="All In One"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content">
                                            <h3 class="title">Giải pháp marketing đa kênh Buff Comment</h3>
                                            <ul class="list-icon">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-1"><img
                                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/software.png"
                                                                alt="software"></div>
                                                        <div class="col-md-11">Buff Comment là bộ phần mềm marketing đa
                                                            kênh trên Facebook, Zalo, Instagram do VNP Software phát
                                                            triển. Đây là bộ công cụ đầy đủ nhất trên thị trường hỗ trợ
                                                            cho chủ doanh nghiệp và các shop online trong hoạt động
                                                            marketing bán hàng.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-1"><img
                                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/advertising.png"
                                                                alt="advertising"></div>
                                                        <div class="col-md-11">Buff Comment mang ý nghĩa tất cả trong
                                                            một, Buff Comment là tất cả những gì mà doanh nghiệp cần để
                                                            xây dựng nền tảng marketing online.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-1"><img
                                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/seo.png"
                                                                alt="seo"></div>
                                                        <div class="col-md-11">Buff Comment bao gồm 8 phần mềm thu phí
                                                            và 7 phần mềm miễn phí hỗ trợ tiếp cận và xây dựng tệp khách
                                                            hàng tiềm năng trên các nền tảng mạng xã hội lớn như
                                                            Facebook, Zalo và Instagram.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-6">
                                        <div class="content">
                                            <h3 class="title">Lợi ích từ bộ công cụ này mang lại</h3>
                                            <p class="description">Đến với VNP Software, bạn sẽ được chúng tôi:<br>Hoạt
                                                động trong lĩnh vực Marketing hơn 7 năm, chúng tôi đã cho ra đời các sản
                                                phẩm công nghệ phục vụ cho hơn 20.000 KH là các chủ doanh nghiệp SMEs và
                                                các cá nhân kinh doanh:</p>
                                            <ul class="list-icon">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-1"><img
                                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/bars.png"
                                                                alt="bars"></div>
                                                        <div class="col-md-11">Xây dựng nền tảng kinh doanh bền vững.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-1"><img
                                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/diagram.png"
                                                                alt="diagram"></div>
                                                        <div class="col-md-11">Tăng hiệu suất và kết quả kinh doanh lên
                                                            5-10 lần.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-1"><img
                                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/connection.png"
                                                                alt="connection"></div>
                                                        <div class="col-md-11">Tiết kiệm chi phí quảng cáo, nhân sự và
                                                            thời gian.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-1"><img
                                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/conversation.png"
                                                                alt="conversation"></div>
                                                        <div class="col-md-11">Dễ dàng quản lý, chăm sóc & tương tác với
                                                            khách hàng tiềm năng hay khách hàng cũ.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/7.png"
                                                alt="All In One"></p>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-12">
                                        <p class="livechat"><a href="https://www.facebook.com/messages/t/vnp.softwarevn"
                                                               class="btn btn-second"><img
                                                    src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/chat.png"
                                                    alt="livechat"> LIVE CHAT NGAY ĐỂ ĐƯỢC HỖ TRỢ</a></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="Solution" class="section section-solution hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>NHỮNG GIẢI PHÁP NÀY PHÙ HỢP VỚI</h2>
                                        <div class="hr"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="image"><img
                                                        src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/8.png"
                                                        alt="All In One"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="title">CHỦ SHOP - CÁ NHÂN</h3>
                                                <p class="description">Đang hoạt động kinh doanh online, muốn tìm cho
                                                    mình giải pháp tiếp cận khách hàng tốt hơn, tiết kiệm chi phí và
                                                    thời gian.</p>
                                                <p class="contact"><a
                                                        href="https://www.facebook.com/messages/t/vnp.softwarevn"
                                                        class="btn btn-main">Liên hệ ngay</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="image"><img
                                                        src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/9.png"
                                                        alt="All In One"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="title">CHỦ DOANH NGHIỆP</h3>
                                                <p class="description">Chủ doanh nghiệp vừa và nhỏ đang mong muốn triển
                                                    khai hoặc tối ưu hoạt động marketing online cho doanh nghiệp của
                                                    mình.</p>
                                                <p class="contact"><a
                                                        href="https://www.facebook.com/messages/t/vnp.softwarevn"
                                                        class="btn btn-main">Liên hệ ngay</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="image"><img
                                                        src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/10.png"
                                                        alt="All In One"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="title">MARKETER, SALER</h3>
                                                <p class="description">Những marketer, saler làm việc tại các cty đang
                                                    muốn làm việc với hiệu quả cao hơn.</p>
                                                <p class="contact"><a
                                                        href="https://www.facebook.com/messages/t/vnp.softwarevn"
                                                        class="btn btn-main">Liên hệ ngay</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="image"><img
                                                        src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/11.png"
                                                        alt="All In One"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="title">AFFILIATE - MMOER</h3>
                                                <p class="description">Là các affiliater, mmoer muốn có cho mình giải
                                                    pháp để kiếm tiền online hiệu quả hơn.</p>
                                                <p class="contact"><a
                                                        href="https://www.facebook.com/messages/t/vnp.softwarevn"
                                                        class="btn btn-main">Liên hệ ngay</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </section>
                        <section id="Why" class="section section-why hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>TẠI SAO NÊN CHỌN VNP SOFTWARRE</h2>
                                        <div class="hr"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/rating.png"
                                                alt="All In One"></p>
                                        <h3 class="title">DỄ SỬ DỤNG</h3>
                                        <p class="description">Phần mềm do VNP Software phát triển theo slogan "Make it
                                            Simple", quý khách hàng chỉ cần 15 -30 phút là có thể sử dụng thành
                                            thạo.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/support.png"
                                                alt="All In One"></p>
                                        <h3 class="title">HỖ TRỢ NHANH CHÓNG</h3>
                                        <p class="description">Với đội ngũ hỗ trợ nhiệt tình, có nhiều năm kinh nghiệm
                                            trong ngành. Quý khách hàng sẽ được hỗ trợ cài đặt và hướng dẫn sử dụng
                                            trong thời gian nhanh nhất.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/clipboard.png"
                                                alt="All In One"></p>
                                        <h3 class="title">CHÍNH SÁCH DÙNG THỬ</h3>
                                        <p class="description">Để quý khách không còn lo lắng khi đưa ra quyết định VNP
                                            SOFTWARE hỗ trợ chính sách 7 ngày dùng thử miễn phí để khẳng định chất
                                            lượng.</p>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/giftbox.png"
                                                alt="All In One"></p>
                                        <h3 class="title">NHIỀU QUÀ TẶNG HẤP DẪN</h3>
                                        <p class="description">Khi trở thành Khách hàng của VNP Software, Quý khách còn
                                            nhận được thêm nhiều khóa học, tài liệu, kiến thức Marketing mới mà không hề
                                            mất thêm bất kỳ khoản phí nào.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/success.png"
                                                alt="All In One"></p>
                                        <h3 class="title">HƠN 7 NĂM KINH NGHIỆM</h3>
                                        <p class="description">Với hơn 7 năm kinh nghiệm làm kinh doanh và phát triển
                                            các công cụ trên Social, chúng tôi luôn nổ lực update để tạo ra những công
                                            nghệ marketing giúp người làm kinh doanh, các doanh nghiệp vừa và nhỏ hoạt
                                            động hiệu quả hơn...</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/money.png"
                                                alt="All In One"></p>
                                        <h3 class="title">HOÀN TIỀN 100%</h3>
                                        <p class="description">VNP luôn đảm bảo quyền lợi tối đa cho khách hàng. Nếu bạn
                                            thấy sản phẩm không đúng như mô tả, tính năng hoạt động không giống như cam
                                            kết. Hãy liên hệ và chúng tôi sẽ hoàn lại tiền 100% trong 7 ngày.</p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </section>
                        {{-- ==<section id="Team" class="section section-team hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>VNP TEAM</h2>
                                        <p class="sub-title">Chúng tôi gồm những sáng lập viên, lập trình viên và đội ngũ tư vấn viên hỗ trợ trẻ, nhiệt huyết. Luôn nổ lực update để tạo ra những<br>công nghệ marketing giúp người làm kinh doanh, các doanh nghiệp vừa và nhỏ hoạt động hiệu quả hơn...</p>
                                        <div class="hr"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-3">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/dai.png" alt="All In One"></p>
                                        <h4 class="title">Bùi Đại</h4>
                                        <p class="position"><span>CEO</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/12.png" alt="All In One"></p>
                                        <h4 class="title">Trần Thịnh Lâm</h4>
                                        <p class="position"><span>CO-FOUNDER & MANAGER</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/14.png" alt="All In One"></p>
                                        <h4 class="title">Nguyễn Đức</h4>
                                        <p class="position"><span>CTO & CO-FOUNDER</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/linh.png" alt="All In One"></p>
                                        <h4 class="title">Trần Trí Linh</h4>
                                        <p class="position"><span>PROJECT MANAGER</span></p>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-3">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/loc.png" alt="All In One"></p>
                                        <h4 class="title">Nguyễn Vĩnh Lộc</h4>
                                        <p class="position"><span>CEO VNPWEB.VN</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/dinh.png" alt="All In One"></p>
                                        <h4 class="title">Định Nguyễn</h4>
                                        <p class="position"><span>CEO WINERP.VN</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/thanh.png" alt="All In One"></p>
                                        <h4 class="title">Trường Thành</h4>
                                        <p class="position"><span>CTO CV.COM.VN</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/toan.png" alt="All In One"></p>
                                        <h4 class="title">Phan Toàn</h4>
                                        <p class="position"><span>HEAD OF MARKETING</span></p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </section>== --}}
                        <section id="Social" class="section section-social" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>THEO DÕI CHÚNG TÔI TRÊN MẠNG XÃ HỘI</h2>
                                        <div class="hr"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/17.png"
                                                alt="All In One"></p>
                                        <h3 class="title">GROUP VNP SUPPORT</h3>
                                        <p class="description">Nhóm hỗ trợ khách hàng của VNP Software trên Facebook,
                                            tham gia ngay cùng với hơn 130.000 thành viên khác.</p>
                                        <p class="download"><a href="https://www.facebook.com/vnp.softwarevn/"
                                                               class="btn btn-main" target="_blank"><img
                                                    src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/log-in.png"
                                                    alt="access now"> TRUY CẬP NGAY</a></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/18.png"
                                                alt="All In One"></p>
                                        <h3 class="title">FANPAGE VNP SOFTWARE</h3>
                                        <p class="description">Theo dõi Fanpage để nhận những tin tức marketing online,
                                            chương trình khuyến mãi, minigame và các tài liệu mới nhất.</p>
                                        <p class="download"><a href="https://www.facebook.com/vnp.softwarevn/"
                                                               class="btn btn-main" target="_blank"><img
                                                    src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/log-in.png"
                                                    alt="access now"> TRUY CẬP NGAY</a></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/19.png"
                                                alt="All In One"></p>
                                        <h3 class="title">CHANNEL YOUTUBE</h3>
                                        <p class="description">Đăng ký kênh Youtube để không bỏ lỡ bất kỳ video chia sẻ
                                            kiến thức và khóa học MIỄN PHÍ nào từ VNP Software.</p>
                                        <p class="download"><a href="https://www.facebook.com/vnp.softwarevn/"
                                                               class="btn btn-main" target="_blank"><img
                                                    src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/log-in.png"
                                                    alt="access now"> TRUY CẬP NGAY</a></p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </section>
                        <section id="Simple" class="section section-simple hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="image"><img height="150px;"
                                                              src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-0/p640x640/79177583_106711254140658_8381905634815115264_o.jpg?_nc_cat=110&_nc_ohc=U5aJ9hi4vbQAQmwz8Ti5WXqk-VuOvD1EmHsVWOXobelW0Yk_1e6t8sa4w&_nc_ht=scontent.fhan2-4.fna&oh=3d722c8cf793bbf32df51501c1f436f2&oe=5E7768B1"
                                                              alt="All In One"></p>
                                        <h3>Đơn giản hóa việc kinh doanh online</h3>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/jigsaw.png"
                                                alt="Hơn 7 năm xây dựng và phát triển"></p>
                                        <h4 class="title">+<span class="counter" data-count="7">7,</span></h4>
                                        <p class="description">Hơn 7 năm xây dựng và phát triển</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/development.png"
                                                alt="Doanh nghiệp phát triển thành công cùng ATP Software"></p>
                                        <h4 class="title">+<span class="counter" data-count="10000">10000,</span></h4>
                                        <p class="description">Doanh nghiệp phát triển thành công cùng VNP Software</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="image"><img
                                                src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/handshake.png"
                                                alt="Đối tác cùng ATP Software phát triển"></p>
                                        <h4 class="title">+<span class="counter" data-count="500">500,</span></h4>
                                        <p class="description">Đối tác cùng VNP Software phát triển</p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            {{-- <div class="image-team"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/atpteam.jpg" alt="ATP SOFTWARE TEAM"></div> --}}
                        </section>
                        <section id="Action" class="section section-action hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title">Hơn 55.000 doanh nghiệp và chủ shop đã đăng ký sử dụng!</h2>
                                        <p class="description">Livechat ngay để được tư vấn dùng thử 7 ngày miễn
                                            phí!</p>
                                        <p class="livechat"><a href="https://www.facebook.com/messages/t/vnp.softwarevn"
                                                               class="btn btn-main"><img
                                                    src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/chat.png"
                                                    alt="livechat"> LIVE CHAT NGAY ĐỂ ĐƯỢC HỖ TRỢ</a></p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </section>
                        {{-- <section id="Clients" class="section section-clients hidden-xs" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>ĐƯỢC TIN DÙNG BỞI</h2>
                                        <div class="hr"></div>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/logo-dat-xanh-atp-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/hpsoft-atp-software-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/benh-vien-quoc-te-city-atp-softwaare-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/logo-hung-thinh-atp-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/168edu-atpsoftware-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/khai-hoan-land-atp-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/bat-dong-san-vn-atp-software-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/ESPERANTOUR-atpsoftware-1-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/dai-hoc-thanh-tay-atp-software-1-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="image"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/tin-hoc-ngoi-sao-atp-software-300x150.png" alt="Hơn 7 năm xây dựng và phát triển"></p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </section> --}}
                    </div>
                </article>
            </main>
        </div>
    </div>

    <!-- <div class="box_fixRight">
        <div class="box_content">
            <a href="https://m.me/atpsoftware.tools" class="item item_1">Liên hệ Fanpage ATPSoftware</a>
            <a href="https://zalo.me/0378557797" class="item item_2">Liên hệ hỗ trợ qua Zalo</a>
            <a href="https://www.facebook.com/plugins/group/join/popup/?group_id=1252281458177067&source=email_campaign_plugin" class="item item_3">Tham gia group Facebook hỗ trợ</a>
        </div>
    </div> -->
    <!-- <div class="hotline-phone-ring-wrap" id="hotline-phone-1">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0378557797" class="pps-btn-img">
                    <img src="/wp-content/themes/jnews-child/template/img/icon-2.png" alt="Hotline" width="50" data-pin-no-hover="true">
                </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:0378557797">
                <span class="text-hotline">0931.9999.11</span>
            </a>
        </div>
    </div>
    <div class="hotline-phone-ring-wrap2" id="hotline-phone-2">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0966842948" class="pps-btn-img">
                    <img src="/wp-content/themes/jnews-child/template/img/icon-2.png" alt="Hotline" width="50" data-pin-no-hover="true">
                </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:0966842948">
                <span class="text-hotline">0967.9999.11</span>
            </a>
        </div>
    </div> -->

    <!-- <div id="LeadForm" class="leadform modal fade-scale">
        <form id="ATPLeadForm" class="atpleadform">
            <div class="mfp-container mfp-s-ready mfp-inline-holder">
                <div class="mfp-content">
                    <div class="devvn-popup-quickbuy">
                        <div class="devvn-popup-inner">
                            <div class="devvn-popup-title">
                                <span>Đặt mua phần mềm</span>
                                <a href="javascript:void(0)" class="showleadform" data-dismiss="modal" aria-label="Close"><div  class="devvn-popup-close">&times;</div></a>
                            </div>
                            <div class="devvn-popup-content ">
                                <div class="devvn-popup-content-left ">
                                    <div class="devvn-popup-prod">
                                        <div class="devvn-popup-img"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/support-pop.png" style="width:100px; height:100px;" alt=""></div>
                                        <div class="devvn-popup-info">
                                            <span class="devvn_title">Hỗ trợ nhanh chóng</span>
                                            <input type="hidden" name="nameproduct" class="devvn_title" value="Trang chủ">
                                            <span class="devvn_price">ATP Software</span>
                                        </div>
                                    </div>
                                    Bạn vui lòng nhập đúng số điện thoại để chúng tôi sẽ gọi xác nhận đơn hàng trước khi giao hàng. Xin cảm ơn!
                                </div>
                                <div class="devvn-popup-content-right">
                                    <form class="devvn_cusstom_info" id="devvn_cusstom_info" method="post" novalidate="novalidate">
                                        <div class="popup-customer-info">
                                            <div class="popup-customer-info-title">Thông tin người mua</div>
                                            <div class="body-form2">
                                                <div class="popup-customer-info-title">Họ và tên <span style="color:red">*</span></div>
                                                <input type="text" name="name" class="form-control" placeholder="Họ và tên" required>
                                                <div class="popup-customer-info-title">Số điện thoại <span style="color:red">*</span></div>
                                                <input type="tel" name="phone" class="form-control" minlength="10" maxlength="11" pattern="^[0]([1]\d{9}|[3|5|7|8|9]\d{8})$" placeholder="Bắt đầu bằng số 0xxxxxxxxx" title="Bạn vui lòng điền đầu số 09,08 hoặc 01 trước. Trong đó: (09,08) điền 10 số, (01) điền 11 số" required>
                                                <input type="hidden" name="href" id="href">
                                                <input type="hidden" name="ip_server" id="ip_server">
                                                <div id="AjaxLoader" class="hide"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/ajax-loader.gif" alt="ajax-load"></div>
                                                <div id="AjaxMessages" class="alert alert-success hide"></div>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-1 popup_quickbuy_shipping">
                                                    <div class="popup_quickbuy_shipping_title">Tổng:</div>
                                                    <div class="popup_quickbuy_total_calc"></div>
                                                </div>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-1">
                                                    <button id="ButtonATPLeadForm" type="submit" class="devvn-order-btn">Đặt hàng ngay</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                document.getElementById("ip_server").value="27.76.96.133";
                document.getElementById("href").value="https://atpsoftware.vn/";
            </script>
        </form>
    </div> -->
    <!-- <div id="ATPCall" class="atp-call">
        <a href="javascript:void(0)" id="ButtonATPCall" class="btn-form-crm">
            <div class="animated infinite zoomIn atp-vong"></div>
            <div class="animated infinite pulse atp-tron"></div>
            <div class="animated infinite tada atp-phone"></div>
            <div class="atp-text"><p>Đặt mua</p></div>
        </a>
    </div> -->

    <div id="SearchFrom" class="searchform">
        <form id="ATPSearchFrom" method="get" action="https://atpsoftware.vn/">
            <div class="modal-body">
                <input type="search" name="s" class="form-control" placeholder="Tìm kiếm bài Viết..."><input
                    class="btn btn-main" type="submit" value="TÌM KIẾM">
            </div>
        </form>
    </div>
{{--    <div id="ATPCall" class="atp-call btn-formcrm">--}}
{{--        <a href="javascript:void(0)" data-name="KH đặt mua phần mềm">--}}
{{--            <div class="animated infinite zoomIn atp-vong"></div>--}}
{{--            <div class="animated infinite pulse atp-tron"></div>--}}
{{--            <div class="animated infinite tada atp-phone"></div>--}}
{{--            <div class="atp-text"><p>Đặt mua</p></div>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div class="modal" id="FormModalATP" role="dialog" aria-hidden="false">--}}
{{--        <div class="modal-dialog">--}}
{{--            <form id="FormCRMATP">--}}
{{--                <div style="height: 372px;border-radius: 20px;" class="modal-content">--}}
{{--                    <div class="formLeft">--}}
{{--                        <img style="width: 192px;padding: 0px;margin-left: 10%;margin-top: 21%;"--}}
{{--                             src="https://atpsoftware.vn/wp-content/themes/jnews-child/img/logo-atpsoftware-white.png">--}}
{{--                        <img style="width: 176px;margin-left: 13%;margin-top: 6%;"--}}
{{--                             src="https://atpsoftware.vn/wp-content/themes/jnews-child/img/services.png">--}}
{{--                    </div>--}}
{{--                    <div class="formRight">--}}
{{--                        <button type="button" class="close-modal close-crm-modal"><span aria-hidden="true">×</span>--}}
{{--                        </button>--}}
{{--                        <h4>Đăng ký tải phần mềm VNP Software</h4>--}}
{{--                        <p style="font-size: 11px;margin-left: 20px;">(Anh/chị vui lòng nhập đúng định dạng số điện--}}
{{--                            thoại đang sử dụng)</p>--}}
{{--                        <div class="formContactNow">--}}
{{--                            <div class="input-group">--}}
{{--                                <span class="input-group-addon"><i class="fa fa-address-book"></i></span>--}}
{{--                                <input class="inputContact" required placeholder="Họ và tên" name="name" type="text">--}}
{{--                            </div>--}}
{{--                            <div class="input-group">--}}
{{--                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>--}}
{{--                                <input class="inputContact" required placeholder="Số điện thoại" name="phone"--}}
{{--                                       type="text" maxlength="10" minlength="10" pattern="^[0][3|5|7|8|9]\d{8}$">--}}
{{--                            </div>--}}
{{--                            <div style="text-align: center; margin-top: 20px" class="form-group">--}}
{{--                                <input type="hidden" id="FormCRM_nonce_field" name="FormCRM_nonce_field"--}}
{{--                                       value="a1a9041e46"/><input type="hidden" name="_wp_http_referer" value="/"/>--}}
{{--                                <input type="hidden" name="href" value="{{route('online-home')}}">--}}
{{--                                <input type="hidden" name="ip_server" value="27.76.96.133">--}}
{{--                                <input type="hidden" name="nameproduct" id="formnameproduct"--}}
{{--                                       value="KH muốn mua phần mềm">--}}
{{--                                <input type="hidden" name="idproduct" id="idproduct">--}}
{{--                                <input type="hidden" name="action" value="ProcessCRMATP">--}}
{{--                                <button style="border-radius: 20px;background: #fa6018;border-color: #fa6018;"--}}
{{--                                        type="submit" id="SubmitFormATP" class="btn btn-primary">Tải Phần Mềm--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="copyrightform">Nhân viên VNP sẽ liên lạc hỗ trợ anh/chị trong ít phút nữa</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <style>
        .section-product .box-product .success {
            text-align: center;
            font-size: 18px;
            color: #1aaf5f;
            margin-top: 20px;
            font-weight: bold;
        }
        .section-banner div {
            text-align: center;
            color: #000;
        }
        .section-banner .container{
        background: none;
        }
        .section-banner{
            background: #e6e7f8;
            padding: 0px;
        }
        .section-banner .image{
            width: 190px;
            margin: 0 auto;
        }
        #Team .image img{
            border: 1px solid;
            border-radius: 108px;
        }
    </style>
@endsection

@extends('online.app')

@section('header')
    <link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')
    <div id="content" class="site-content" itemtype="https://schema.org/WebSite" itemscope="itemscope">
        <div id="primary" class="content-area primary">
            <main id="main" class="site-main" role="main">
                <article id="home-page" class="home-page">
                    <div class="entry-content clear" itemprop="text">
                        <section id="Product" class="section section-product" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 style="margin-bottom:40px"> Sản phẩm hỗ trợ {{$categories2->name}}</h2>
                                    </div>
                                    <div style="clear:both"></div>
                                    @foreach($products as $key => $product)
                                        <div class="col-md-3">
                                            <div id="BigAIO" class="box-product">
                                                <div class="box-hover">
                                                    <p class="button  button-quick" data-id=""><a
                                                            href="javascript:void(0)" id="{{$product->id}}"
                                                            data-target="" class="btn btn-default">XEM NHANH</a></p>
                                                    <p class="button button-info"><a
                                                            href="{{ asset('shop/landing/'.$product->id)}}"
                                                            class="btn btn-main">XEM CHI TIẾT</a></p>
                                                </div>
                                                <p class="image"><img
                                                        src="{{ asset('upload/products/'.$product->image)}}"
                                                        alt="All In One"></p>
                                                <div class="icon">
                                                    @foreach($categories as $key => $category)
                                                        @if($category->id==$product->product_category)
                                                            <img src="{{ asset('upload/categorys/'.$category->image)}}"
                                                                 alt="">
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
                                                <p class="download"><a href="#" target="_blank"
                                                                       class="btn btn-second visible-xs"><img
                                                            src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/cloud-storage-download.png"
                                                            alt="download"> Xem chi tiết</a></p>
                                                <p class="download"><a href="javascript:void(0)" data-id="67155"
                                                                       data-name="BUFF Livestream"
                                                                       class="btn btn-second btn-check-down hidden-xs">
                                                        SỬ DỤNG NGAY</a></p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </section>
                        <section id="PopupProduct" class="section section-popupproduct affix hide">
                            <div id="BigAIOPopup" class="popup-content hide">
                                <div class="close-popup"><a href="javascript:void(0)">×</a></div>
                                <div class="row contentDetailProducts" id="contentDetailProducts">
                                {{-- show quick detail--}}
                                </div>
                            </div>
                        </section>
                    </div>
                </article>
            </main>
        </div>
    </div>
    <div id="SearchFrom" class="searchform">
        <form id="ATPSearchFrom" method="get" action="">
            <div class="modal-body">
                <input type="search" name="s" class="form-control" placeholder="Tìm kiếm bài Viết..."><input
                    class="btn btn-main" type="submit" value="TÌM KIẾM">
            </div>
        </form>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
    $('#BigAIO .box-hover .button-quick a').click(function () {
    $('#PopupProduct').removeClass('hide');
    $('.popup-content').addClass('hide');
    $('#BigAIOPopup').removeClass('hide');

        var employee_id = $(this).attr("id");
        $.get('detail/'+ employee_id , function (data) {
            console.log(data);
            $('#contentDetailProducts').html(data['html']);

        });
    });

    $('.close-popup a').click(function () {
    $('#PopupProduct').addClass('hide');
    $('.popup-content').addClass('hide');
    });
    </script>
    {{-- end xem nhanh --}}
@endsection

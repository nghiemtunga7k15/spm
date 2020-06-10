@extends('admin.app')

@section('content')
<div class="body" style="background: white">
<div class='modal fade modal-fullscreen-menu' id='modalNavigation' role='dialog' tabindex='-1' style="background: #0a7c82;">
  <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
	<span class='sr-only'>Đóng Menu</span>
	X
  </button>
  <div class='modal-dialog'>
	<nav class='list-group'>
									<a href="http://sanphanmem.com/tin-tuc/gioi-thieu" class="list-group-item" title="Giới thiệu">
					<!-- <img src="http://sanphanmem.com/public/libraryclothes-04-1/images/anh%20chung/logo%20don.jpg"> -->
					Giới thiệu 
				</a>
							<a href="http://sanphanmem.com/trang/dai-ly" class="list-group-item" title="Tặng web">
					<!-- <img src="http://sanphanmem.com/site/img/no-image.png"> -->
					Tặng web 
				</a>
							<a href="http://sanphanmem.com/danh-muc/ban-hang-cung-spm" class="list-group-item" title="Bán hàng cùng SPM">
					<!-- <img src="http://sanphanmem.com/site/img/no-image.png"> -->
					Bán hàng cùng SPM 
				</a>
							<a href="http://sanphanmem.com/danh-muc/review-phan-mem" class="list-group-item" title="Review phần mềm">
					<!-- <img src="http://sanphanmem.com/public/libraryclothes-04-1/images/icon/ps_cate_1505241220_913.png"> -->
					Review phần mềm 
				</a>
							<a href="http://sanphanmem.com/danh-muc/nang-luc-ncc" class="list-group-item" title="Năng lực NCC">
					<!-- <img src="http://sanphanmem.com/site/img/no-image.png"> -->
					Năng lực NCC 
				</a>
							<a href="http://sanphanmem.com/lien-he/" class="list-group-item" title="Liên hệ">
					<!-- <img src="http://sanphanmem.com/site/img/no-image.png"> -->
					Liên hệ 
				</a>
						</nav>
  </div>
				</div>
<script>
	$(document).ready(function () {
		$("#navbar").btrmenu();
	});
</script>
<script>
    function searchAjax(e) {
        var word = $(e).val();
        $('.search .bodySearch ').empty();
        
        $.ajax({
            type: "get",
            url: 'http://sanphanmem.com/tim-kiem-ajax',
            data: {
                word: word,
            },
            success: function(result){
                var obj = jQuery.parseJSON( result);
                $('.search .bodySearch ').empty();
                
                $.each(obj.products, function(index, element) {

					var html = '<div class="item">';
                     html += '<p><a href="/'+ element.slug+'"><img src="'+ element.image +'" alt="'+ element.title +'"/>'+ element.title +'' +
						 '<span class="price "> ';
                     if (element.discount != null) {
                         html +=  '<span class="priceOld">'+numeral(element.price).format('0,0')+'</span>';
                         html +=  '<span class="priceDiscount">'+numeral(element.discount).format('0,0')+' VNĐ</span>';
					 } else {
                         html +=  '<span class="priceDiscount">'+numeral(element.price).format('0,0')+' VNĐ</span>';
					 }
					html += '</span></a></p>';

                     html += '</div>';

                    $('.search .bodySearch ').append(html);

                });

                $('.search .bodySearch ').append('<button class="btn btn-danger" onclick="return submitSearch(this);">Xem tất cả</button>')
            }

        });

        return true;
    }
    function submitSearch(e) {
       $('.searchProduct').submit();
	}
</script>

<!-- Phần nội dung -->
    <section class="contact">
        <div class="container">
            <div class="breadrum mb20 mt30">
                <a href="http://sanphanmem.com/">Trang chủ</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                <a href="lien-he.html" class="active">Hệ thống cửa hàng</a>
            </div>
            <div class="inforContact">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="infor clearfix boxH1 mb20">
                            <h3 class="titlel">
                                <span class="line"></span>Thông tin cửa hàng
                            </h3>
                            <div >
                                <img src="http://sanphanmem.com/public/libraryclothes-04-1/images/anh chung/logo_chu.png" alt="logo"/>
                            </div>
                            <p>
                                <p><strong><span style="font-size:16px">S&agrave;n phần mềm c&ocirc;ng nghệ Việt Nam</span></strong> - Chuy&ecirc;n tư vấn, kinh doanh&nbsp; c&aacute;c sản phẩm về phần mềm.</p>

<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><em><strong>Đặt mua qua S&agrave;n phần mềm để được giảm 20% chiết khấu gi&aacute; trị hợp đồng trực tiếp từ nh&agrave; cung cấp.</strong></em></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><em><strong>M&atilde; chiết khấu: SPM20</strong></em></span></span></p>

<p>(024) 73010268</p>

<p>Mở cửa: Thứ 2 - Chủ nhật, từ 8h30 đến 20h30</p>                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 Map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59587.97785448771!2d105.80194413492788!3d21.02273601629448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSGFub2ksIEhvw6BuIEtp4bq_bSwgSGFub2ksIFZpZXRuYW0!3m2!1d21.0277644!2d105.8341598!5e0!3m2!1sen!2s!4v1509203212506" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-xs-12">
                        <h2 class="titlel" style="margin-top: 15px;"><span class="line"></span>Liên hệ với chúng tôi </h2>
                        <div class="row">
                            <form action="http://sanphanmem.com/submit/contact"  onSubmit="return contact(this);"  method="post"  name="frmContact">
                                <input type="hidden" name="_token" value="0TW42q1OYOChwIN2lyavLurcbgdUdcyQrQYh32fv">
                                <input type="hidden" name="is_json" class="form-control captcha" value="1" placeholder="">
                                <div class="col-lg-12">
                                    <section id="giaohang" class="">
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 col-sm-2 control-label"> Họ và tên ( <i class="fa fa-circle"></i> ) : </label>
                                            <div class="col-lg-10 col-sm-10">
                                                <input type="text" class="form-control ship_phone" name="name" placeholder="" required/>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 col-sm-2 control-label"> Số điện thoại ( <i class="fa fa-circle"></i> ) : </label>
                                            <div class="col-lg-10 col-sm-10">
                                                <input type="text" class="form-control ship_phone" name="phone" placeholder="" required/>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 col-sm-2 control-label"> Email ( <i class="fa fa-circle"></i> ) : </label>
                                            <div class="col-lg-10 col-sm-10">
                                                <input type="email" class="form-control ship_phone" name="email" placeholder="" required/>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 col-sm-2 control-label"> Tên công ty ( <i class="fa fa-circle"></i> ) : </label>
                                            <div class="col-lg-10 col-sm-10">
                                                <input type="text" class="form-control ship_phone" name="message[]" placeholder="" required/>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 col-sm-2 control-label"> Địa chỉ ( <i class="fa fa-circle"></i> ) : </label>
                                            <div class="col-lg-10 col-sm-10">
                                                <input type="text" class="form-control ship_phone" name="address" placeholder="" required/>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 col-sm-2 control-label"> Lời nhắn ( <i class="fa fa-circle"></i> ) : </label>
                                            <div class="col-lg-10 col-sm-10">
                                                <textarea type="text" id="description" name="message[]" placeholder="Lời nhắn" class="form-control input-sm" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12 col-sm-12">
                                                <button type="submit" id="submitNext" class="btn" style="    color: #545454; background-color: #fff;    border: 2px solid;padding: 9px 14px;"> Gửi liên hệ &gt; </button>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    //Đồng bộ chiều cao các div
                    $(function() {
                        $('.boxH1').matchHeight();
                        $('.boxH2').matchHeight();
                        $('.boxH3').matchHeight();
                    });
                </script>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function contact(e) {
            var $btn = $(e).find('button').text('Đang tải ...');
            var data = $(e).serialize();

            $.ajax({
                type: "POST",
                url: 'http://sanphanmem.com/submit/contact',
                data: data,
                success: function(result) {
                    var obj = jQuery.parseJSON(result);
                    // gửi thành công
                    if (obj.status == 200) {
                        alert(obj.message);
                        $btn.text('Gửi thành công');

                        return;
                    }

                    // gửi thất bại
                    if (obj.status == 500) {
                        alert(obj.message);
                        $btn.text('Gửi thất bại');

                        return;
                    }
                },
                error: function(error) {
                    alert('có lỗi gì đó')
                    $btn.text('Gửi thất bại');
                }
            });
            return false;
        }
    </script>
    <style>
        #giaohang .form-group label
        {
            text-align: left;
        }
        #giaohang .fa-circle
        {
            color: red;
            font-size: 10px;
        }
    </style>

<footer>
    <div class="testimonials-wrapper container-fluid vietstar" style="border-top: 1px solid #f8f8f8;"></div>
   
    <div class="container-fluid signUp" style="background:#fff">
        <div class="container">
            <div class="row" style="padding-top:20px;padding-bottom:20px">
                <div class="wrap_foo_switchboard col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 no-padding">
                            <div class="icon_phone"> <img src="http://sanphanmem.com/public/libraryclothes-04-1/images/icon/icon_phone.jpg" alt="Icon Phone">
                            </div>
                            <div class="phone_footer">
                               <p><strong>GỌI MUA H&Agrave;NG(8:30-22:00)</strong></p>

<p>0912476286</p>

<p>Tất cả c&aacute;c ng&agrave;y trong tuần</p>                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 no-padding">
                            <div class="icon_phone"> <img src="http://sanphanmem.com/public/libraryclothes-04-1/images/icon/icon_phone.jpg" alt="Icon Phone">
                            </div>
                            <div class="phone_footer">
                                <p><strong>G&Oacute;P &Yacute;, KHIẾU NẠI(8:30-21:30)</strong>&nbsp;</p>

<p>0912476286</p>

<p>Nghỉ chiều thứ 7, CN, ng&agrave;y lễ</p>                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap_foo_social col-md-4 col-sm-12">
                    
                        
                            
                                
                                
                                
                            
                        
                    
                    <div class="social col-sm-6 col-xs-12">
                        <p class="title-md-footer"> <strong>Like  trên mạng xã hội</strong>
                        </p>
                        <ul class="navbar-social">
                            <li class="social-face">
                                <a href="https://www.facebook.com/cost.com.vn/" target="_blank" rel="nofollow"> <i class="fa fa-facebook-official" aria-hidden="true"></i> </a>
                            </li>
                            <li>
                                <a href="http://cost.com.vn/" target="_blank" rel="nofollow"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC3mPJfVVCdEcso_EPSz_XKA?view_as=subscriber" target="_blank" rel="nofollow"> <i class="fa fa-youtube" aria-hidden="true"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fooMenu" style="background:#f4f4f4">
        <div class="">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <ul class="instuction_footer">
                                                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeIn" style="background:#f4f4f4">
        <div class="row">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class=" copy">
                            <div class="col-xs-12 col-sm-8">
                                <div class="addressfooter">
                                    <p><strong><span style="font-size:16px">S&agrave;n phần mềm c&ocirc;ng nghệ Việt Nam</span></strong> - Chuy&ecirc;n tư vấn, kinh doanh&nbsp; c&aacute;c sản phẩm về phần mềm.</p>

<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><em><strong>Đặt mua qua S&agrave;n phần mềm để được giảm 20% chiết khấu gi&aacute; trị hợp đồng trực tiếp từ nh&agrave; cung cấp.</strong></em></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><em><strong>M&atilde; chiết khấu: SPM20</strong></em></span></span></p>

<p>(024) 73010268</p>

<p>Mở cửa: Thứ 2 - Chủ nhật, từ 8h30 đến 20h30</p>                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 text-center gov">
                                 <img src="http://sanphanmem.com/public/libraryclothes-04-1/images/anh chung/logo_chu.png" width="146px">
                                <div class="text-center" style="display: block" >
                                    Sàn phần mềm công nghệ Việt Nam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</footer>


<!-- Modal -->
<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content_1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</h4>
            </div>
            <form action="http://sanphanmem.com/dang-nhap" class="submitDelete" method="post" >
                <input type="hidden" name="_token" value="0TW42q1OYOChwIN2lyavLurcbgdUdcyQrQYh32fv">
                <div class="modal-body clearfix">
                    <p class="notify red"></p>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <input  type="email" class="form-control" name="email"  placeholder="Nhập tên đâng nhập" required autofocus>
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required minlength="5">
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" > Ghi nhớ mật khẩu
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Đăng nhập</button>
                            <a style="color: blue;
    text-decoration: underline;
    margin-left: 5px;display: inline-block;vertical-align: bottom" data-toggle="modal" data-target="#myModalFoget" id="Foget"> Quên mật khẩu </a>
                            <p>Nếu chưa có tài khoản ? Vui lòng đăng kí <a href="http://sanphanmem.com/dang-ky" class="" style="color: blue;
    text-decoration: underline;
    margin-left: 5px;">tại đây</a></p>

                        </div>
                                                <div class="alert alert-danger success" role="alert" id="">
                            <strong id="success">

                            </strong>
                        </div>


                        
                            
                                
                            
                        
                    </div>




                </div>
            </form>

        </div>
    </div>
</div>


<div class="modal fade" id="myModalFoget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content_1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user" aria-hidden="true"></i> Quên mật khẩu</h4>
            </div>
            <form action="http://sanphanmem.com/gui-email-mat-khau"  class="submitDelete" method="post" id="register" onsubmit="return checksubmit()" >
                <input type="hidden" name="_token" value="0TW42q1OYOChwIN2lyavLurcbgdUdcyQrQYh32fv">
                <div class="modal-body clearfix">
                    <p class="notify red"></p>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <input  type="email" class="form-control" name="email" value="" placeholder="Nhập email đăng ký tài khoản" required />
                            <span class="help-block">
                                                <strong id="" class="eroremail"></strong>
                                 <strong id="" class="sendemail"></strong>
                                            </span>
                        </div>

                        
                            
                        
                        
                            
                                
                                    
                                
                            
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Gửi email</button>
                        </div>
                        
                            
                                
                                    
                                        
                                    
                                
                            

                        
                        
                            

                            
                        


                        
                        
                        
                        
                        
                    </div>




                </div>
            </form>

        </div>
    </div>
</div>
<style>
    .modal-content_1 {
        background: #fff;
    }
    .modal-body {
        background: #fff;
    }

    @media (min-width: 768px)
    {
        .modal-dialog {
            max-width: 40%;
            margin: 30px auto;
        }
    }

</style>
<script>
    function forgetPassword() {
        $('#myModalForget').modal('show');
        $('#myModalLogin').modal('hide');
    }
</script>




<script>

    $(document).ready(function() {
        $(this).scrollTop(0);
        var s1 = $("header");
        var s2 = $(".submenu1");
        var pos = s1.position();
        var posheight = s1.height();
        var heightbody = $('body').height();
        var heightwindow = $(window).height();
        // alert('body ' + heightbody +'---------' + 'window' + heightwindow + '+++++++' + posheight);

        $(window).scroll(function() {
            var windowpos = $(window).scrollTop();
            if (windowpos > pos.top && ((heightbody - posheight) > heightwindow )) {
                s1.addClass("sticky");
                $('.top ').css('display','none')
            } else {
                s1.removeClass("sticky");
                $('.top ').css('display','block')
            }
            if (windowpos > (pos.top)) {
                s2.addClass("ds-none");
                $('.submenuPC').click(function(){
                    s2.removeClass("ds-none");
                });

                $('.Mbsubmenu .Mobilemenu .navbar').css('margin-top','0');
            } else {
                s2.removeClass("ds-none");
                $('.Mbsubmenu .Mobilemenu .navbar').css('margin-top','50px');


            }
        });

        $('.submenuPC').click(function(){
            $('.submenu1').toggle();
        });

    });

    // $(document).ready(function() {
    //    $(this).scrollTop(0);
    //    var s1 = $("#mobile-menu");
    //    var s2 = $(".Mbsubmenu");
    //    var pos = s1.position();
    //    $(window).scroll(function() {
    //        var windowpos = $(window).scrollTop();
    //        if (windowpos > pos.top) {
    //            $('.Mbsubmenu .Mobilemenu .navbar').css('margin-top','0');

    //        }


    //        }
    //    });




    // ds-none

    // $(window).load(function() {
    //     // Animate loader off screen
    //     $(".loadding").fadeOut("slow");;
    // });
    $( document ).ready(function() {
        var x = setInterval(function() {
            $('.timeDiscount').each(function(index) {

                var countDownDate = new Date($(this).val()).getTime();

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                $(this).parent().find('.day').html(days + ' Ngày');
                $(this).parent().find('.hour').html(hours + ' Giờ');
                $(this).parent().find('.minute').html(minutes + ' Phút');
                $(this).parent().find('.second').html(seconds + ' Giây');

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    $(this).parent().find('.day').html('');
                    $(this).parent().find('.hour').html('');
                    $(this).parent().find('.minute').html('');
                    $(this).parent().find('.second').html('');
                }

            });
        }, 1000);



    });

    function subcribeEmailSubmit(e) {
        var email = $(e).find('.emailSubmit').val();
        var token =  $(e).find('input[name=_token]').val();

        $.ajax({
            type: "POST",
            url: 'http://sanphanmem.com/subcribe-email',
            data: {
                email: email,
                _token: token
            },
            success: function(data){
                var obj = jQuery.parseJSON(data);

                alert(obj.message);
            }
        });
        return false;
    }

    function addToOrder(e) {
        var data = $(e).serialize();

        $.ajax({
            type: "POST",
            url: 'http://sanphanmem.com/dat-hang',
            data: data,
            success: function(result){
                var obj = jQuery.parseJSON( result);
                console.log(obj);
                $('#modelAddToCart .modal-body ').empty();
                $.each(obj.orderItems, function(index, element) {
                    $('#modelAddToCart .modal-body ').append('<p>'+ obj.quantities[index] +' sản phẩm "'+ element.title +'" - '+ obj.color +' - '+obj.size+' đã được thêm vào giỏ hàng.</p>');
                });
                window.location="http://sanphanmem.com/gio-hang";
                // window.location.href = 'your_url';
                // $('#modelAddToCart').modal('show');
            },
            error: function(error) {
                $('#myModalLogin .notify ').empty();
                $('#myModalLogin .notify ').append('<p>Vui lòng đăng nhập để sử dụng tính năng này.</p>');
                $('#myModalLogin').modal('show');
            }

        });

        return false;
    }

    function addToOrderItem(e) {
        var data = $(e).serialize();

        $.ajax({
            type: "POST",
            url: 'http://sanphanmem.com/dat-hang',
            data: data,
            success: function(result){
                var obj = jQuery.parseJSON( result);
                console.log(obj);
                $('#modelAddToCart .modal-body ').empty();
                $('.orderMessage').html('Bạn thêm đơn hàng thành công');

            },
            error: function(error) {
                $('.orderMessage').html('Bạn thêm đơn hàng thất bại')
            }

        });

        return false;
    }


    function showLogin(e) {
        $('#myModalLogin .notify ').empty();
        $('#myModalLogin').modal('show');
    }

    function showMenu(e) {
        if ($(e).hasClass('active')) {
            $(e).addClass('active');
        } else {
            $(e).removeClass('active')
        }
    }

    //top
    // Hide the toTop button when the page loads.
    $(".back-to-top").css("display", "none");

    // This function runs every time the user scrolls the page.
    $(window).scroll(function(){
        // Check weather the user has scrolled down (if "scrollTop()"" is more than 0)
        if($(window).scrollTop() > 0){
            $(".back-to-top").fadeIn("slow");
        }
        else {
            // If it's less than 0 (at the top), hide the toTop button.
            console.log("is less");
            $(".back-to-top").fadeOut("slow");
        }
    });


    // When the user clicks the toTop button, we want the page to scroll to the top.
    $(".back-to-top").click(function(){

        // Disable the default behaviour when a user clicks an empty anchor link.
        // (The page jumps to the top instead of // animating)
        event.preventDefault();

        // Animate the scrolling motion.
        $("html, body").animate({
            scrollTop:0
        },"slow");
    });


</script>
<!-- Modal -->
<div class="modal fade" id="modelAddToCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content_1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Đặt hàng</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <a href="lien-he.html" class="btn btn-default" data-dismiss="modal">Tiếp tục mua hàng</a>
                <a href="http://sanphanmem.com/gio-hang" class="btn btn-primary">Giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
<style>
    .modal-content_1 {
        background: #fff;
    }
    .modal-title {
        margin-top: 10px;
        margin-left: 15px;
    }
</style>
<!-- Modal -->
<div class="modal fade" id="myModalForget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content_1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user" aria-hidden="true"></i> Quên mật khẩu</h4>
            </div>
            <form action="http://sanphanmem.com/quen-mat-khau" class="submitDelete" method="post" >
                <input type="hidden" name="_token" value="0TW42q1OYOChwIN2lyavLurcbgdUdcyQrQYh32fv">

                <div class="modal-body clearfix">
                    <p class="notify red"></p>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email"  placeholder="Nhập email đăng ký" required autofocus>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .modal-content_1 {
        background: #fff;
    }
    .modal-body {
        background: #fff;
    }
</style>
<script>
    var itemCompare = 0;
    $(document).ready(function() {
        itemCompare = 0;
        $('#popupVitural').hide();
        setInterval(function(){
            $('#popupVitural').show().slideDown();
        }, 5000);

        $('#popupVitural .Closed').click(function(){
            $('#popupVitural').slideUp().hide();
            $('#popupVitural').addClass('hide');
        });

        var w = $('.submenuPC').width();
        $('.maxWidth').css('width',w);
        var h = $('.submenu1').height();
        $('.maxWidth').css('height',h);

        $('.product-wrapper').matchHeight();
        $('.product-info').matchHeight();
        $('.price-new-old').matchHeight();
        $('.titlePro').matchHeight();


        $('.docthemhide').click(function(){

            var attrhref = $(this).attr('href');
            $(attrhref).show();
            $('.docthemhide').hide();
            $('.thugonhide').show();
            // $(this).html("Thu gọn <i class='fa fa-angle-double-up' aria-hidden='true'></i>");
        });
        $('.thugon').click(function(){

            var attrhref = $(this).attr('href');
            $(attrhref).hide();
            $('.docthemhide').show();
            $('.thugonhide').hide();
            // $(this).html("Thu gọn <i class='fa fa-angle-double-up' aria-hidden='true'></i>");
        });


        $('.deleteForm').click(function(){
            $('.productCompare').css('display','none');
        });
        $('#Foget').click(function(){
            $('#myModalLogin').modal('hide');
        })
    });
    function showProductCompare(e) {
        $('.productCompare').hide();
        $(e).parent().next().show();

    }

    function saveCompare(e) {
        var productId = $(e).find('.checkbox').val();
        var productTitle = $(e).find('.checkbox').attr('product-title');
        var productImage = $(e).find('.checkbox').attr('product-image');
        if(!$(e).find('.checkbox').is(':checked')) {
            $('.productCompare').find('.productSelect'+productId).remove();
        } else {

            //console.log(itemCompare);
            if (itemCompare > 2) {
                alert('Chỉ được phép chọn tối đa 3 sản phẩm');
                return false;
            }
            itemCompare++;
            var productCompare = '<div class="item productSelect'+productId+'" >';
            productCompare +=       '<div class="row">';
            productCompare +=           '<div class="col-xs-3 left">';
            productCompare +=               '<img src="'+ productImage +'" class="imageProductCompare"/>';
            productCompare +=               '<input type="hidden" value="'+productId+'" name="product_id[]" />'
            productCompare +=           '</div>';
            productCompare +=           '<div class="col-xs-7 right">';
            productCompare +=               '<h5>'+ productTitle + '</h5>';
            productCompare +=           '</div>';
            productCompare +=           '<div class="col-xs-1 delete">';
            productCompare +=               '<i class="fa fa-ban" aria-hidden="true" onclick="return removeProductCompare(this);" product-id="'+productId+'"></i>';
            productCompare +=           '</div>';
            productCompare +=       '</div>';
            productCompare +=    '</div>';

            $('.productCompare').find('.contentCompare').append(productCompare);
        }
    }

    function removeProductCompare(e) {
        itemCompare--;
        var productId = $(e).attr('product-id');
        $('.product'+productId).removeAttr('checked');
        $('.productCompare').find('.productSelect'+productId).remove();
    }
</script>
<!-- import icon font awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Import thư viện JQuery -->

<script>
    // kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
    var offset = 500;
    // thời gian di trượt 0.75s ( 1000 = 1s )
    var duration = 750;
    $(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > offset)
                $('#top-up').fadeIn(duration);else
                $('#top-up').fadeOut(duration);
        });
        $('#top-up').click(function () {
            $('body,html').animate({scrollTop: 0}, duration);
        });
    });
</script>


<!--
<script>
    $(document).ready(function(){
        $('#email').focusout(function(){
            var email =  $('#email').val();
            $.ajax({
                type: "GET",
                url: 'http://sanphanmem.com/check-email',
                data : {
                    email : email
                },
                dataType:"JSON",
                success: function(result){
                    // alert(result.message);
                    if(result.status == 200)
                    {
                        alert(result.message);
                        $("#errouemail").html('Email đã tồn tại');
                        $("#errouemail").append("<input hidden value='1' id='erroremail'  />");
                        return false;
                    }
                    else
                    {
                        $("#errouemail").html('');

                    }
                    // $('.ship_name').val(result.name);
                    // $('.ship_email').val(result.email);
                    // $('.ship_address').val(result.address);
                },
                error: function(error) {
                }
            });
        });
        $( "#register" ).submit(function( event ) {
            if($('#erroremail').val()  == '1' )
            {
                alert('Email đã tồn tại');
                return false;
            }
        });
    });
</script>
-->
<div class="container">
    <div class="row">
        
        <div class="col-md-12 backTop">
            <div class="righticon">
                <div title="Về đầu trang" onmouseover="this.style.color='#590059'" onmouseout="this.style.color='#004993'" id="top-up">
                    <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection
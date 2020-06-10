<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{asset('landingTemplade2/')}}/">
    <!--====== Title ======-->
    <title>AppLand - App Landing Page Template</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('dist/img/logovnp.png')}}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== lineicons CSS ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

<header class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a href="{{asset('/')}}"><img src="{{asset('dist/img/logovnp.png')}}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll nav-link" href="#home">Sản Phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll nav-link" href="#features">Tính Năng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll nav-link" href="">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll nav-link" href="">Sản Phẩm liên quan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll nav-link" href="#contact">Liên hệ</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->

    <div id="home" class="header-hero bg_cover d-lg-flex align-items-center">

        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        <div class="shape shape-5"></div>
        <div class="shape shape-6"></div>

        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 col-md-10">
                    <div class="header-hero-content">
                        <h3 class="header-title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s"><span>{{$product->name}}</span></h3>
                        <p class="text wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.6s">{{$product->short_describe}}</p>
                        <ul class="d-flex">
                            <li><a href="https://rebrand.ly/appland-ud" rel="nofollow" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.8s">Sử Dụng Ngay</a></li>
                        </ul>
                    </div> <!-- header hero content -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-10">
                    <div class="header-image">
                        <img src="{{ asset('upload/products/'.$product->image)}}" alt="app" class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="image-shape wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <img src="assets/images/image-shape.svg" alt="shape">
                        </div>
                    </div> <!-- header image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="header-shape-1"></div> <!-- header shape -->
        <div class="header-shape-2">
            <img src="assets/images/header-shape-2.svg" alt="shape">
        </div> <!-- header shape -->
    </div> <!-- header hero -->
</header>

<!--====== HEADER PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="why" class="services-area pt-110 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center pb-25">
                    <h3 class="title">Why You Should Choose AppLand</h3>
                    <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis dolor comprehensam at vis. Vel ut percipitur dignissim signiferumque.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-services services-color-1 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <div class="services-icon d-flex align-items-center justify-content-center">
                        <i class="lni lni-layers"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="services-title"><a href="#">Clean Design</a></h4>
                        <p class="text">Lorem ipsum dolor sitam etco snsetetur sadipscing elitr sed diam nonumy.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services services-color-2 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                    <div class="services-icon d-flex align-items-center justify-content-center">
                        <i class="lni lni-layout"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="services-title"><a href="#">Easy to Use</a></h4>
                        <p class="text">Lorem ipsum dolor sitam etco snsetetur sadipscing elitr sed diam nonumy.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services services-color-3 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.6s">
                    <div class="services-icon d-flex align-items-center justify-content-center">
                        <i class="lni lni-bolt"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="services-title"><a href="#">Fast Loading</a></h4>
                        <p class="text">Lorem ipsum dolor sitam etco snsetetur sadipscing elitr sed diam nonumy.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services services-color-4 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                    <div class="services-icon d-flex align-items-center justify-content-center">
                        <i class="lni lni-protection"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="services-title"><a href="#">All Elements</a></h4>
                        <p class="text">Lorem ipsum dolor sitam etco snsetetur sadipscing elitr sed diam nonumy.</p>
                    </div>
                </div> <!-- single services -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<!--====== FEATURES ======-->

<!--====== END FEATURES ======-->

<section id="about" class="about-area pt-70 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center pb-25">
                    <h3 class="title" id="features">Các tính năng nổi bật</h3>
{{--                    <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis dolor comprehensam at vis. Vel ut percipitur dignissim signiferumque.</p>--}}
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image mt-50 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <div class="about-shape"></div>
                    <img class="app" src="{{ asset('upload/products/'.$product->image)}}" alt="app">
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6">
                <div class="features-items">
                    @foreach($features as  $feature)
                        @if($feature->product_id==$product->id)
                    <div class="single-features features-color-1 d-sm-flex mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                        <div class="features-icon d-flex justify-content-center align-items-center">
{{--                            <i class="lni lni-laptop-phone"></i>--}}
                            <img style="width: 70px;" src="{{ asset('upload/features/'.$feature->image)}}" alt="">
                        </div>
                        <div class="features-content media-body">
                            <h4 class="features-title">{{$feature->name}}</h4>
                            <ul>
                                @foreach($featuresDescription as $fd)
                                    @if($feature->id==$fd->id_feature_title)
                                        <li>{{$fd->name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->


<!--====== DOWNLOAD PART START ======-->

<section id="download" class="download-area pt-70 pb-40">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-9">
                <div class="download-image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <img class="image" src="{{ asset('upload/products/'.$product->image)}}" alt="download">

                    <div class="download-shape-1"></div>
                    <div class="download-shape-2">
                        <img class="svg" src="assets/images/download-shape.svg" alt="shape">
                    </div>
                </div> <!-- download image -->
            </div>
            <div class="col-lg-6">
                <div class="download-content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <h3 class="download-title">Download and Start Using!</h3>
                    <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis doorcomprehen sam at vis. Vel ut dignissim signiferumq Alii nusquam cuduo, vim eusde consulatu percipitur, meis dolor comprehensam at vij. Alii nusquam cu duo, vim eu consulatu percipitur, meis doorcomprehen sam at vis. Vel ut dignissim signiferumq nusquam.</p>
                </div> <!-- download image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== DOWNLOAD PART ENDS ======-->

<!--====== PART START ======-->

<footer id="footer" class="footer-area">

    <div class="footer-shape shape-1"></div>
    <div class="footer-shape shape-2"></div>
    <div class="footer-shape shape-3"></div>
    <div class="footer-shape shape-4"></div>
    <div class="footer-shape shape-5"></div>
    <div class="footer-shape shape-6"></div>
    <div class="footer-shape shape-7"></div>
    <div class="footer-shape shape-8">
        <img class="svg" src="assets/images/footer-shape.svg" alt="Shape">
    </div>

    <div class="footer-widget pt-30 pb-80" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <a class="logo" href="{{asset('/')}}" >
                            <img src="{{asset('dist/img/logovnp.png')}}" alt="Logo">
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        <ul class="social">
                            <li><a href="#"><i class="lni lni-facebook"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                            <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer-link d-flex flex-wrap">
                        <div class="footer-link-wrapper mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.4s">
                            <div class="footer-title">
                                <h4 class="title">Quick Links</h4>
                            </div>
                            <ul class="link">
                                <li><a class="" href="#">Sản phẩm</a></li>
                                <li><a class="" href="#">Tính năng</a></li>
                                <li><a class="" href="#">blog</a></li>
                                <li><a class="" href="#">Sản phẩm liên quan</a></li>
                                <li><a class="" href="#">Liên hệ</a></li>
                            </ul>
                        </div> <!-- footer link wrapper -->

                        <div class="footer-link-wrapper mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                            <div class="footer-title">
                                <h4 class="title">Support</h4>
                            </div>
                            <ul class="link">
                                <li><a class="" href="#">FAQ</a></li>
                                <li><a class="" href="#">Privacy Policy</a></li>
                                <li><a class="" href="#">Terms Of Use</a></li>
                                <li><a class="" href="#">Legal</a></li>
                                <li><a class="" href="#">Site Map</a></li>
                            </ul>
                        </div> <!-- footer link wrapper -->
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-contact mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="footer-title">
                            <h4 class="title">Quick Link</h4>
                        </div>
                        <ul class="contact-list">
                            <li>
                                <div class="contact-info d-flex">
                                    <div class="info-content media-body">
                                        <p class="text"><i class="lni lni-phone"></i> +809272561823</p>
                                    </div>
                                </div> <!-- contact info -->
                            </li>
                            <li>
                                <div class="contact-info d-flex">
                                    <div class="info-content media-body">
                                        <p class="text"><a href="#"><i class="lni lni-envelope"></i> info@appland.com</a></p>
                                    </div>
                                </div> <!-- contact info -->
                            </li>
                            <li>
                                <div class="contact-info d-flex">
                                    <div class="info-content media-body">
                                        <p class="text"><a href="#"><i class="lni lni-world"></i> www.yourweb.com</a></p>
                                    </div>
                                </div> <!-- contact info -->
                            </li>
                            <li>
                                <div class="contact-info d-flex">
                                    <div class="info-content media-body">
                                        <p class="text"><i class="lni lni-map"></i> 123 Stree New York City , United States Of America 750.</p>
                                    </div>
                                </div> <!-- contact info -->
                            </li>
                        </ul> <!-- contact list -->
                    </div> <!-- footer contact -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright d-sm-flex justify-content-between">
                        <div class="copyright-text text-center">
                            <p class="text">landing page by <a rel="nofollow" href="">VNP SOFTWARE</a></p>
                        </div> <!-- copyright text -->

                        <div class="copyright-privacy text-center">
                            <a href="#">Report Issues</a>
                        </div> <!-- copyright privacy -->
                    </div> <!-- copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>

<!--====== PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

<!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

<!--====== PART ENDS ======-->





<!--====== Jquery js ======-->
{{--<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>--}}
<script src="assets/js/vendor/jquery.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<!--====== WOW js ======-->
<script src="assets/js/wow.min.js"></script>


<!--====== Scrolling Nav js ======-->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>
{{--<script src="assets/js/landingpage.js"></script>--}}
<script>
    $(document).ready(function() {
        $(".nav-link").click(function() {
            var t = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(t).offset().top - 75
            }, {
                duration: 1000,
            });
            // $('body').scrollspy({ target: '.navbar',offset: $(t).offset().top });
            return false;
        });

    });

</script>
</body>

</html>

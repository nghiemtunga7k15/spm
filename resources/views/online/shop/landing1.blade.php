<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$product->name}}</title>
    <meta charset="UTF-8">
    <base href="{{asset('landingTemplade/')}}/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/aos/css/aos.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
<header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
        <div class="container">
            <div class="navbar-brand-wrapper d-flex">
                <a href="{{asset('/')}}"><img src="{{asset('dist/img/logovnp.png')}}" alt=""></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                    <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                        <div class="navbar-collapse-logo">
                            <img src="images/Group2.svg" alt="">
                        </div>
                        <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#header-section">Sản phẩm <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features-section">về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#digital-marketing-section">tính năng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feedback-section">sản phẩm liên quan</a>
                    </li>
                    <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                        <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="banner" >
    <div class="container">
        <h1 class="font-weight-semibold">{{$product->name}}.</h1>
        <h6 class="font-weight-normal text-muted pb-3">{{$product->feature}}</h6>
        <img src="{{ asset('upload/products/'.$product->image)}}" alt="" class="img-fluid">
    </div>
</div>
<div class="content-wrapper">
    <div class="container">
        <section class="features-overview" id="features-section" >
            <div class="content-header">
                <h2>How does it works</h2>
                <h6 class="section-subtitle text-muted">One theme that serves as an easy-to-use operational toolkit<br>that meets customer's needs.</h6>
            </div>
            <div class="d-md-flex justify-content-between">
                <div class="grid-margin d-flex justify-content-start">
                    <div class="features-width">
                        <img src="images/Group12.svg" alt="" class="img-icons">
                        <h5 class="py-3">Speed<br>Optimisation</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                        <a href="#"><p class="readmore-link">Readmore</p></a>
                    </div>
                </div>
                <div class="grid-margin d-flex justify-content-center">
                    <div class="features-width">
                        <img src="images/Group7.svg" alt="" class="img-icons">
                        <h5 class="py-3">SEO and<br>Backlinks</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                        <a href="#"><p class="readmore-link">Readmore</p></a>
                    </div>
                </div>
                <div class="grid-margin d-flex justify-content-end">
                    <div class="features-width">
                        <img src="images/Group5.svg" alt="" class="img-icons">
                        <h5 class="py-3">Content<br>Marketing</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                        <a href="#"><p class="readmore-link">Readmore</p></a>
                    </div>
                </div>
            </div>
        </section>

        @foreach($features as  $feature)
            <section class="digital-marketing-service" id="digital-marketing-section">
            @if($feature->product_id==$product->id)
                @if($feature->id%2==0)
            <div class="row align-items-center">
                <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                    <h3 class="m-0">{{$feature->name}}</h3>
                    <div class="col-lg-7 col-xl-6 p-0">
                        <ul>
                            @foreach($featuresDescription as $fd)
                                @if($feature->id==$fd->id_feature_title)
                                    <li>{{$fd->name}}</li>
                                @endif
                            @endforeach
                        </ul>

{{--                        <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer</p>--}}
                    </div>
                </div>
                <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                    <img src="{{ asset('upload/features/'.$feature->image)}}" alt="" class="img-fluid">
                </div>
            </div>
                @else
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                                <img src="{{ asset('upload/features/'.$feature->image)}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                                <h3 class="m-0">{{$feature->name}}</h3>
                                <div class="col-lg-9 col-xl-8 p-0">
                                    <ul>
                                        @foreach($featuresDescription as $fd)
                                            @if($feature->id==$fd->id_feature_title)
                                                <li>{{$fd->name}}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endif
        </section>
            @endif
        @endforeach
        <section class="case-studies" id="case-studies-section">
            <div class="row grid-margin">
                <div class="col-12 text-center pb-5">
                    <h2>Our case studies</h2>
                    <h6 class="section-subtitle text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
                </div>
                <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                    <div class="card color-cards">
                        <div class="card-body p-0">
                            <div class="bg-primary text-center card-contents">
                                <div class="card-image">
                                    <img src="images/Group95.svg" class="case-studies-card-img" alt="">
                                </div>
                                <div class="card-desc-box d-flex align-items-center justify-content-around">
                                    <div>
                                        <h6 class="text-white pb-2 px-3">Know more about Online marketing</h6>
                                        <button class="btn btn-white">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">Online Marketing</h6>
                                <p>Seo, Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card color-cards">
                        <div class="card-body p-0">
                            <div class="bg-warning text-center card-contents">
                                <div class="card-image">
                                    <img src="images/Group108.svg" class="case-studies-card-img" alt="">
                                </div>
                                <div class="card-desc-box d-flex align-items-center justify-content-around">
                                    <div>
                                        <h6 class="text-white pb-2 px-3">Know more about Web Development</h6>
                                        <button class="btn btn-white">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">Web Development</h6>
                                <p>Developing, Designing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card color-cards">
                        <div class="card-body p-0">
                            <div class="bg-violet text-center card-contents">
                                <div class="card-image">
                                    <img src="images/Group126.svg" class="case-studies-card-img" alt="">
                                </div>
                                <div class="card-desc-box d-flex align-items-center justify-content-around">
                                    <div>
                                        <h6 class="text-white pb-2 px-3">Know more about Web Designing</h6>
                                        <button class="btn btn-white">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">Web Designing</h6>
                                <p>Designing, Developing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
                    <div class="card color-cards">
                        <div class="card-body p-0">
                            <div class="bg-success text-center card-contents">
                                <div class="card-image">
                                    <img src="images/Group115.svg" class="case-studies-card-img" alt="">
                                </div>
                                <div class="card-desc-box d-flex align-items-center justify-content-around">
                                    <div>
                                        <h6 class="text-white pb-2 px-3">Know more about Software Development</h6>
                                        <button class="btn btn-white">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">Software Development</h6>
                                <p>Developing, Designing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customer-feedback" id="feedback-section">
            <div class="row">
                <div class="col-12 text-center pb-5">
                    <h2>Các sản phẩm liên quan</h2>
                </div>
                <div class="owl-carousel owl-theme grid-margin">

                    @foreach($productByCategory as $productCat)
                        @if($productCat->product_category==$product->product_category)
                            <a href="{{asset('shop/landing/'.$productCat->id)}}">
                                <div class="card customer-cards">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('upload/products/'.$productCat->image)}}" width="89" height="89" alt="" class="">
                                            <p class="m-0 py-3 text-muted">{{$productCat->short_describe}}</p>
                                            <div class="content-divider m-auto"></div>
                                            <h6 class="card-title pt-3">{{$productCat->name}}</h6>
                                            <h6 class="customer-designation text-muted m-0">{{$productCat->feature}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <section class="contact-us" id="contact-section">
            <div class="contact-us-bgimage grid-margin" >
                <div class="pb-4">
                    <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Do you have any projects?</h4>
                    <h4 class="pt-1" data-aos="fade-down">Contact us</h4>
                </div>
                <div data-aos="fade-up">
                    <button class="btn btn-rounded btn-outline-danger">Contact us</button>
                </div>
            </div>
        </section>
        <footer class="border-top">
            <p class="text-center text-muted pt-4">Copyright © 2019<a href="https://www.bootstrapdash.com/" class="px-1">VNP SoftWare.</a>All rights reserved.</p>
        </footer>
        <!-- Modal for Contact - us Button -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" id="Email-1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="Message">Message</label>
                                <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="vendors/jquery/jquery.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="vendors/aos/js/aos.js"></script>
<script src="js/landingpage.js"></script>
</body>
</html>

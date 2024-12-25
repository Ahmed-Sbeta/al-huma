<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Events particiants</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
		<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dripicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('Profile_assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    a,
    input,
    textarea,
    button,
    option {
        font-family: 'Cairo' !important;
        color: #1e3333;
    }
    </style>
    </head>
    <body>
        <!-- header -->
        @include('includes.header_ar')
        <!-- header-end -->
        <!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section id="parallax" class="slider-area breadcrumb-area d-flex align-items-center justify-content-center fix" style="background-image:url(img/innerpage_bg_img.jpg)">
            </section>
            
			<!-- team-area -->
            <section id="team" class="team-area p-relative pt-120 pb-120 fix">
                <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>Speakers</h2></div>
				<div class="circal1 item-zoom-inout"></div>
				<div class="circal2 item-zoom-inout"></div>
				<div class="circal3 item-zoom-inout"></div>
				<div class="circal4 item-zoom-inout"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Event title</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s"> participants </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                    <img src="{{asset('img/speaker_1.png')}}" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>aya abdalsalam</h5>
                                   <p>participants</p>
									<strong>Age: 25</strong> 
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- team-area-end -->
           
        </main>
        <!-- main-area-end -->
        <!-- footer -->
       @include('includes.Footer_ar')
        <!-- footer-end -->		

		<!-- JS here -->
        <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/one-page-nav-min.js')}}"></script>
        <script src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/ajax-form.js')}}"></script>
        <script src="{{asset('js/paroller.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/parallax.min.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/element-in-view.js')}}"></script>
		<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>

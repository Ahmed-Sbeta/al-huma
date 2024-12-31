<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from zcube.in/eventes/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 15:28:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>الحومة - فعاليات</title>
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
            <section id="parallax" class="slider-area breadcrumb-area d-flex align-items-center justify-content-center fix"
             style="background-image:url({{asset('img/new/pic7.jpg')}})">
                <div class="slider-shape ss-one layer" data-depth="0.10"><img src="{{asset('img/doddle_6.png')}}" alt="shape"></div>
                <div class="slider-shape ss-three layer" data-depth="0.40"><img src="{{asset('img/doddle_9.png')}}" alt="shape"></div>
                <div class="slider-shape ss-four layer" data-depth="0.60"><img src="{{asset('img/doddle_7.png')}}" alt="shape"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>الفعاليات</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">الحومة</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">فعاليات</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
			<!-- shop-banner-area start -->
        <section class="shop-banner-area pt-120 pb-90 wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
            <div class="container">
            @if(session('msg'))
                <div class="alert text-right alert-success">
                {{ session('msg') }}
                </div>
				@elseif(session('err'))
				<div class="alert text-right alert-danger">
                {{ session('err') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-xl-7">
                        <div class="mb-30">
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="home">
                                    <div class="product-large-img">
                                        <img src="{{asset(Storage::url($event->image))}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 text-right" dir="rtl">
                        <div class="product-details mb-30">
                            <div class="product-details-title">
                                <p>{{$event->type}}</p>
                                <h1>{{$event->title}}</h1>
                                <div class="price details-price pb-30 mb-20">
                                    @if($event->male_allowed && $event->Female_allowed)
                                    <span>الفاعلية متاحه للجميع</span>
                                    @elseif($event->male_allowed)
                                    <span>الفاعلية متاحه للذكور فقط</span>
                                    @else
                                    <span>الفاعلية متاحه للإناث فقط</span>
                                    @endif
                                    
                                </div>
                            </div>
                            <p>{{$event->description}}</p>
                            <div class="product-cat mt-30 mb-30">
                                <span>توقبت: </span><br>
                                <div style="font-size:18px;">بداية الفاعلية : {{$event->event_start}}</div>
                                <div style="font-size:18px;">انتهاء الفاعلية : {{$event->event_end}}</div>
                                <span>المكان: </span><br>
                                <div style="font-size:18px;"> {{$event->location}}  </div>
                            </div>                            
                            <div class="product-details-action">
                                @if(Auth::user()->role == 1)
                            @if($hasParticipated)
                                <a href="/ar/unsubscribe/{{$event->id}}" class="btn btn-black" style="color: #fff;" type="submit">الغاء الاشتراك</a>                                   
                            @else
                                <a href="/ar/subscribe/{{$event->id}}" class="btn btn-black" style="color: #fff;" type="submit">اشتراك</a>                                   
                            @endif
                                 @endif
                            @if(Auth::user()->role == 2)
                                <a href="/ar/events/participants/{{$event->id}}" class="btn btn-black" style="color: #fff;" type="submit">قائمة المشتركين</a>
                                @endif
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-banner-area end -->
        <!-- product-desc-area start -->
        <section class="product-desc-area pb-80" dir="rtl">
            <div class="container text-right">
                <div class="row">
                    <div class="col-12">
                        <div class="bakix-details-tab">
                            <ul class="nav text-center justify-content-center pb-30 mb-50" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#id-desc" role="tab"
                                        aria-controls="home" aria-selected="true">قوانين الانظمام </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="id-add-in" data-toggle="tab" href="#id-add" role="tab"
                                        aria-controls="profile" aria-selected="false">عن فعاليات الحومة</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev" role="tab"
                                        aria-controls="profile" aria-selected="false">المشتركين (50)</a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="id-desc" role="tabpanel" aria-labelledby="desc-tab">
                                <div class="event-text mb-40">
                                    <p>الالتزام بالمواعيد: يرجى الحضور في الوقت المحدد لبداية ونهاية الفعالية. <br>
                                    لاحترام والتعاون: احترام المشاركين والمنظمين. و تجنب أي سلوك غير لائق أو يؤدي إلى إزعاج الآخرين. <br>
                                    الحفاظ على النظافة: يُرجى الحفاظ على نظافة المكان والتخلص من النفايات في الأماكن المخصصة. <br>
                                    الأطفال والمرافقين: الأطفال مرحب بهم (إذا كانت الفعالية تناسب جميع الأعمار). <br>
                                    الالتزام بتعليمات المنظمين: يُرجى التعاون مع تعليمات فريق التنظيم لضمان سلامة الجميع وسير الفعالية بسلاسة. <br>
                                    المسؤولية الشخصية: المنظمون غير مسؤولين عن فقدان أو تلف الممتلكات الشخصية، لذا يُرجى الاعتناء بمقتنياتك. <br>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id-add" role="tabpanel" aria-labelledby="id-add-in">
                                <div class="additional-info">
                                    <div class="table-responsive">
                                        <h4>معلومات اضافية</h4>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>مكان الفاعلية</th>
                                                    <td class="product_weight">{{$event->location}}</td>
                                                </tr>
                                                <tr>
                                                    <th>بداية الفاعلية</th>
                                                    <td class="product_dimensions">{{$event->event_start}}</td>
                                                </tr>
                                                <tr>
                                                    <th>نهاية الفاعلية</th>
                                                    <td class="product_dimensions">{{$event->event_end}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id-rev" role="tabpanel" aria-labelledby="id-r">
                                <div class="additional-info">
                                    <div class="event-text mb-40">
                                        <p></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-desc-area end -->
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
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/element-in-view.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>

<!-- Mirrored from zcube.in/eventes/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 15:28:35 GMT -->
</html>

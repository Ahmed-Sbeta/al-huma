<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eventes - Event Conference HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dripicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<style>
    h1 {
        text-align: center;
        margin-bottom: 50px;
        margin-top: 50px;
    }

    .blog-card-blog {
        margin-top: 30px;
    }

    .blog-card {
        display: inline-block;
        position: relative;
        width: 100%;
        margin-bottom: 30px;
        border-radius: 6px;
        color: rgba(0, 0, 0, 0.87);
        background: #fff;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }

    .blog-card .blog-card-image {
        height: 60%;
        position: relative;
        overflow: hidden;
        margin-left: 15px;
        margin-right: 15px;
        margin-top: -30px;
        border-radius: 6px;
        box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    }

    .blog-card .blog-card-image img {
        width: 100%;
        height: 100%;
        border-radius: 6px;
        pointer-events: none;
    }

    .blog-card .blog-table {
        padding: 15px 30px;
    }

    .blog-table {
        margin-bottom: 0px;
    }

    .blog-category {
        position: relative;
        line-height: 0;
        margin: 15px 0;
    }

    .blog-text-success {
        color: #28a745 !important;
    }

    .blog-card-blog .blog-card-caption {
        margin-top: 5px;
    }

    .blog-card-caption {
        font-weight: 700;
        font-family: "Roboto Slab", "Times New Roman", serif;
    }

    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .blog-card-caption,
    .blog-card-caption a {
        color: #333;
        text-decoration: none;
    }

    p {
        color: #3C4857;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    .blog-card .ftr {
        margin-top: 15px;
    }

    .blog-card .ftr .author {
        color: #888;
    }

    .blog-card .ftr div {
        display: inline-block;
    }

    .blog-card .author .avatar {
        width: 36px;
        height: 36px;
        overflow: hidden;
        border-radius: 50%;
        margin-right: 5px;
    }

    .blog-card .ftr .stats {
        position: relative;
        top: 1px;
        font-size: 14px;
    }

    .blog-card .ftr .stats {
        float: right;
        line-height: 30px;
    }

</style>

<body>
    <!-- header -->
    @include('includes.header')
    <!-- header-end -->
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section id="parallax" class="slider-area breadcrumb-area d-flex align-items-center justify-content-center fix"
            style="background-image:url(img/new/pic1.jpg)">
            <div class="slider-shape ss-one layer" data-depth="0.10"><img src="img/doddle_6.png" alt="shape"></div>
            <div class="slider-shape ss-three layer" data-depth="0.40"><img src="img/doddle_9.png" alt="shape"></div>
            <div class="slider-shape ss-four layer" data-depth="0.60"><img src="img/doddle_7.png" alt="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>Events</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- shop-area -->
        <section class="shop-area pt-120 pb-120 p-relative wow fadeInUp animated" data-animation="fadeInUp animated"
            data-delay=".2s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="mt-20 mb-30">Showing 1–9 of 10 results</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-right">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected="selected">Filter</option>
                            <option value="popularity">Family Events</option>
                            <option value="rating">Girls only Events</option>
                            <option value="date">Dialogues</option>
                            <option value="price">Workshops</option>
                            <option value="price-desc">Evenings</option>
                            <option value="price-desc">Exhibitions</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/new/event3.jpg" style="max-height: 340px;height: 100%;width: 354px;">
                                </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> Dialogues</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">The importance of youth in economic development</a>
                                </h4>
                                <p class="blog-card-description">Event at : local counsil hall</p>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="#"> <img src="img/speaker_2.png" alt="..."
                                                class="avatar img-raised"> <span>Lorem</span> </a>
                                    </div>
                                    <div class="stats"> <i class="far fa-clock"></i> Jan 23 , 5:00 PM </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/new/event1.jpg" style="max-height: 340px;height: 100%;width: 354px;">
                                </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="fas fa-bolt"></i> Workshop</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">Development and modification by phone</a>
                                </h4>
                                <p class="blog-card-description">Event at : local counsil hall</p>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="#"> <img src="img/speaker_1.png" alt="..."
                                                class="avatar img-raised"> <span>Ahmed sbeta</span> </a>
                                    </div>
                                    <div class="stats"> <i class="far fa-clock"></i> 10 min </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/new/event2.jpg" style="max-height: 340px;height: 100%;width: 354px;">
                                </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="far fa-cloud-moon"></i> Evenings</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">Tripoli, its beautiful air is enough for me</a>
                                </h4>
                                <p class="blog-card-description">Event at : local counsil hall</p>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="#"> <img src="img/speaker_3.png" alt="..."
                                                class="avatar img-raised"> <span>Lorem</span> </a>
                                    </div>
                                    <div class="stats"> <i class="far fa-clock"></i> Jan 23 , 5:00 PM </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/new/event4.jpg" style="max-height: 340px;height: 100%;width: 354px;">
                                </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> Dialogues</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">something talking about something IDK what</a>
                                </h4>
                                <p class="blog-card-description">Event at : local counsil hall</p>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="#"> <img src="img/speaker_6.png" alt="..."
                                                class="avatar img-raised"> <span>Lorem</span> </a>
                                    </div>
                                    <div class="stats"> <i class="far fa-clock"></i> Jan 23 , 5:00 PM </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image">
                                <a href="#"> <img class="img" src="img/new/pic1.jpg" style="max-height: 340px;height: 100%;width: 354px;">
                                </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="fas fa-blog"></i> Evenings</h6>
                                <h4 class="blog-card-caption">
                                    <a href="#">somethign about the picture IDK what it is really</a>
                                </h4>
                                <p class="blog-card-description">Event at : local counsil hall</p>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="#"> <img src="img/speaker_1.png" alt="..."
                                                class="avatar img-raised"> <span>Ahmed sbeta</span> </a>
                                    </div>
                                    <div class="stats"> <i class="far fa-clock"></i> 10 min </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pagination-wrap mt-50 text-center">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a href="{{ $paginator->currentPage() == 1 }}">1</a></li>
                                    <li class="page-item"><a href="#">2</a></li>
                                    <li class="page-item"><a href="#">3</a></li>
                                    <li class="page-item"><a href="#">...</a></li>
                                    <li class="page-item"><a href="#">10</a></li>
                                    <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->
    </main>
    <!-- main-area-end -->
    <!-- footer -->
    @include('includes.footer')
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

</html>

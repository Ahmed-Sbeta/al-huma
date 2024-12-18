<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="{{asset('Profile_assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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

    .icons i {
        color: #b5b3b3;
        border: 1px solid #b5b3b3;
        padding: 6px;
        margin-left: 4px;
        border-radius: 5px;
        cursor: pointer;
    }

    .activity-done {
        font-weight: 600;
    }

    .list-group li {
        margin-bottom: 12px;
    }

    .list-group-item {}

    .list li {
        list-style: none;
        padding: 10px;
        border: 1px solid #e3dada;
        margin-top: 12px;
        border-radius: 5px;
        background: #fff;
    }

    .checkicon {
        color: green;
        font-size: 19px;
    }

    .date-time {
        font-size: 12px;
    }

    .profile-image img {
        margin-left: 3px;
    }

    .menu-options {
        display: none;
        position: absolute;
        top: 100%;
        /* Align it right below the ellipsis icon */
        left: 0;
        /* Align it to the right of the ellipsis icon */
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        z-index: 1000;
    }

    .menu-options ul li a {
        text-decoration: none;
        color: black;
        border: none;
    }

</style>

<body>
    <!-- header -->
    @include('includes.header_ar')
    <!-- header-end -->
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section id="parallax" class="slider-area breadcrumb-area d-flex align-items-center justify-content-center fix"
            style="background-image:url({{asset('img/new/pic7.jpg')}})">
            <div class="slider-shape ss-one layer" data-depth="0.10"><img src="{{asset('img/doddle_6.png')}}"
                    alt="shape"></div>
            <div class="slider-shape ss-three layer" data-depth="0.40"><img src="{{asset('img/doddle_9.png')}}"
                    alt="shape"></div>
            <div class="slider-shape ss-four layer" data-depth="0.60"><img src="{{asset('img/doddle_7.png')}}"
                    alt="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="">
                                <h2 style="color: white;">معلومات المستخدم</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- profile-area -->
        <div class="container pt-5 pb-5" dir="rtl">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://cdn1.iconfinder.com/data/icons/website-internet/48/website_-_female_user-512.png"
                                        alt="Admin" class="rounded-circle p-1" width="110">
                                    <div class="mt-3">
                                        <h4>أيه عبدالسلام</h4>
                                        <p class="text-secondary mb-1">مستخدم</p>
                                        <button class="btn">تغيير صورة</button>
                                        <button class="btn">حفظ</button>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <ul class="list-group list-group-flush">
								<a href="/ar/profile"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">معلومات المستخدم</span>
								</li></a>
								<a href="/ar/profile/events"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">الفعاليات</span>
								</li></a>
								<!-- <a href="/ar/profile/users"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">مستخدمون</span>
								</li></a>
                                <a href="/ar/profile/add_event"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">اضافه فعالية</span>
								</li></a> -->
								
							</ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between align-items-center activity">
                            <div><span class="activity-done">كل الفعاليات (2)</span></div>
                        </div>
                        <div class="mt-3">
                            <ul class="list list-inline">
                                <li class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="fa fa-check-circle checkicon"></i>
                                        <div class="mr-2">
                                            <a href=""><h6 class="mb-0">اهمية الشباب في التنمية الاقتصادية</h6></a>
                                            <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center" style="position: relative;">
                                        <div class="d-flex flex-column mr-2">
                                            <i class="fa fa-ellipsis-h" onclick="toggleMenu(event)"></i>
                                            <div class="menu-options"
                                                style="display: none; position: absolute; left: 0; background-color: white;">
                                                <ul>
                                                    <li><a href="/view">عرض</a></li>
                                                    <li><a href="/edit">الغاء الاشتراك</a></li>
                                                    <!-- <li><a href="/delete">ازالة</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="fa fa-check-circle checkicon"></i>
                                        <div class="mr-2">
                                            <a href=""><h6 class="mb-0">التصوير والتعديل بالهاتف  </h6></a>
                                            <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center" style="position: relative;">
                                        <div class="d-flex flex-column mr-2">
                                            <i class="fa fa-ellipsis-h" onclick="toggleMenu(event)"></i>
                                            <div class="menu-options"
                                                style="display: none; position: absolute; left: 0; background-color: white;">
                                                <ul>
                                                <li><a href="/view">عرض</a></li>
                                                    <li><a href="/edit">الغاء الاشتراك</a></li>
                                                    <!-- <li><a href="/delete">ازالة</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- <li class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="fa fa-check-circle checkicon"></i>
                                        <div class="mr-2">
                                            <a href=""><h6 class="mb-0"> أمسية عزف عالبيانو</h6></a>
                                            <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center" style="position: relative;">
                                        <div class="d-flex flex-column mr-2">
                                            <i class="fa fa-ellipsis-h" onclick="toggleMenu(event)"></i>
                                            <div class="menu-options"
                                                style="display: none; position: absolute; left: 0; background-color: white;">
                                                <ul>
                                                    <li><a href="/view">View</a></li>
                                                    <li><a href="/edit">Edit</a></li>
                                                    <li><a href="/delete">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="fa fa-check-circle checkicon"></i>
                                        <div class="mr-2">
                                            <a href=""><h6 class="mb-0">فاعلية أخري تمت اضافتها</h6></a>
                                            <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center" style="position: relative;">
                                        <div class="d-flex flex-column mr-2">
                                            <i class="fa fa-ellipsis-h" onclick="toggleMenu(event)"></i>
                                            <div class="menu-options"
                                                style="display: none; position: absolute; left: 0; background-color: white;">
                                                <ul>
                                                    <li><a href="/view">View</a></li>
                                                    <li><a href="/edit">Edit</a></li>
                                                    <li><a href="/delete">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="fa fa-check-circle checkicon"></i>
                                        <div class="mr-2">
                                            <a href=""><h6 class="mb-0">أهميه الشابات في التنمية الاقتصادية</h6></a>
                                            <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center" style="position: relative;">
                                        <div class="d-flex flex-column mr-2">
                                            <i class="fa fa-ellipsis-h" onclick="toggleMenu(event)"></i>
                                            <div class="menu-options"
                                                style="display: none; position: absolute; left: 0; background-color: white;">
                                                <ul>
                                                    <li><a href="/view">View</a></li>
                                                    <li><a href="/edit">Edit</a></li>
                                                    <li><a href="/delete">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="fa fa-check-circle checkicon"></i>
                                        <div class="mr-2">
                                            <a href=""><h6 class="mb-0">أهميه الشابات في التنمية الاقتصادية</h6></a>
                                            <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center" style="position: relative;">
                                        <div class="d-flex flex-column mr-2">
                                            <i class="fa fa-ellipsis-h" onclick="toggleMenu(event)"></i>
                                            <div class="menu-options"
                                                style="display: none; position: absolute; left: 0; background-color: white;">
                                                <ul>
                                                    <li><a href="/view">View</a></li>
                                                    <li><a href="/edit">Edit</a></li>
                                                    <li><a href="/delete">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- profile-area-end -->
    </main>
    <!-- main-area-end -->
    <!-- footer -->
    @include('includes.footer_ar')
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
    <script>
        function toggleMenu(event) {
            var menu = event.currentTarget.nextElementSibling; // Select the next sibling element, which is the menu
            if (menu.style.display === "none" || !menu.style.display) {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }
            // To close the menu if clicked outside
            window.onclick = function (event) {
                if (!event.target.matches('.fa-ellipsis-h')) {
                    var dropdowns = document.getElementsByClassName("menu-options");
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.style.display === "block") {
                            openDropdown.style.display = "none";
                        }
                    }
                }
            }
        }

    </script>
</body>

</html>

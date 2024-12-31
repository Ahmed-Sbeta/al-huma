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

</head>
<style>
    
    h1,h2,h3,h4,h5,h6,p,span,a,input,textarea,button,option{
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
            <div class="slider-shape ss-one layer" data-depth="0.10"><img src="{{asset('img/doddle_6.png')}}" alt="shape"></div>
            <div class="slider-shape ss-three layer" data-depth="0.40"><img src="{{asset('img/doddle_9.png')}}" alt="shape"></div>
            <div class="slider-shape ss-four layer" data-depth="0.60"><img src="{{asset('img/doddle_7.png')}}" alt="shape"></div>
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
        @if(session('msg'))
                <div class="alert text-right alert-success">
                {{ session('msg') }}
                </div>
                @endif
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
                        <form action="{{ route('profile.updatePicture') }}" method="POST" enctype="multipart/form-data">
                        @csrf
							<div class="d-flex flex-column align-items-center text-center">
								<img id="profilePreview" src="{{ asset(Storage::url(Auth::user()->image)) ?? asset('images/user.png') }}" alt="Profile Picture" class="rounded-circle p-1" style="width: 100px; height: 100px; border-radius: 50%;">
								<input type="file" name="image" id="imageInput" style="display: none;" onchange="previewImage(event)">
                                <div class="mt-3">
									<h4> {{Auth::user()->name}}</h4>
                                    @if(Auth::user()->role == 1)
									<p class="text-secondary mb-1">مستخدم</p>
                                    @else
                                    <p class="text-secondary mb-1">ادمن</p>
                                    @endif
                                    <button type="button" class="btn" onclick="document.getElementById('imageInput').click()">تغيير صورة</button>
									<button class="btn">حفظ</button>
								</div>
                                </form>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<a href="/ar/profile"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">معلومات المستخدم</span>
								</li></a>
								<a href="/ar/profile/events"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">الفعاليات</span>
								</li></a>
                                @if(Auth::user()->role == 2)
								<a href="/ar/profile/users"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">مستخدمون</span>
								</li></a>
                                <a href="/ar/profile/add_event"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">اضافه فعالية</span>
								</li></a>
                                <a href="/ar/profile/add_organizer"><li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<span class="text-secondary">اضافه منظم</span>
								</li></a>
                                @endif
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
                        <form action="{{route('editinfo')}}" method="get">
                            @csrf
						<div class="card-body text-right">
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">اسم المستخدم</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">البريد الالكتروني</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">رقم الهاتف</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="phone_number" value="{{Auth::user()->phone_number}}" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">جنس</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                    @if(Auth::user()->sex == "Female")
									<input type="text" class="form-control" disabled value="انثي">
                                    @else
									<input type="text" class="form-control" disabled value="ذكر">
                                    @endif
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">عمر المستخدم</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="Age" value="{{Auth::user()->age}}" required>
								</div>
							</div>
                           
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                <button class="btn btn-primary px-4">حفظ التغييرات</button>
								</div>
							</div>
						</div>
					</div>
                </form>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body text-right">
									<h5 class="d-flex align-items-center mb-3">تاريخ الانظمام</h5>
									<p>07/12/2024</p>
								</div>
							</div>
						</div>
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
    <script>
    function previewImage(event) {
        const reader = new FileReader(); // Create a file reader
        reader.onload = function () {
            const preview = document.getElementById('profilePreview');
            preview.src = reader.result; // Set the <img> src to the file's content
        };
        reader.readAsDataURL(event.target.files[0]); // Read the file's data
    }
</script>
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


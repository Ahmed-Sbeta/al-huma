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
				<div class="col-lg-8 text-right">
                <div class="list list-row block">
                    @foreach($users as $user)
               <div class="list-item" data-id="7">
                  <div><a  data-abc="true"><span class="w-48 avatar"><img src="{{$user->image ? asset(storage::url( $user->image)) : asset('images/users.png') }}" alt="." style="width: 100px; height: 55px; border-radius: 50%;"></span></a></div>
                  <div class="flex">
                     <a class="item-author text-color" data-abc="true">{{$user->name}}</a>
                     @if($user->role == 1)
                     <div class="item-except text-muted text-sm h-1x">جنس : {{$user->sex}} , العمر : {{$user->age}}</div>
                     @endif
                  </div>
                  <div class="no-wrap">
                     <div class="item-date text-muted text-sm d-none d-md-block">تاريخ التسجيل {{$user->created_at->format('Y-m-d')}}</div>
                  </div>
               </div>
               @endforeach
               {{ $users->links('pagination::simple-default') }}
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

<style>
    body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.4285714286;
    color: #212529;
    text-align: left;
    background-color: #f9f9fa
}


#page-content{
    
    margin-top:100px;
}


a {
    color: #448bff;
    text-decoration: none;
    background-color: transparent
}

a:hover {
    color: #005ef7;
    text-decoration: underline
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus,
a:not([href]):not([tabindex]):hover {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus {
    outline: 0
}






/*Mark Down*/


@media (min-width:576px) {
    .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
    }
    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }
    .col-sm-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
    }
    .col-sm-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
    }
    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%
    }
    .col-sm-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
    }
    .col-sm-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
    }
    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%
    }
    .col-sm-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
    }
    .col-sm-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
    }
    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%
    }
    .col-sm-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
    }
    .col-sm-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
    }
    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%
    }
    .order-sm-first {
        order: -1
    }
    .order-sm-last {
        order: 13
    }
    .order-sm-0 {
        order: 0
    }
    .order-sm-1 {
        order: 1
    }
    .order-sm-2 {
        order: 2
    }
    .order-sm-3 {
        order: 3
    }
    .order-sm-4 {
        order: 4
    }
    .order-sm-5 {
        order: 5
    }
    .order-sm-6 {
        order: 6
    }
    .order-sm-7 {
        order: 7
    }
    .order-sm-8 {
        order: 8
    }
    .order-sm-9 {
        order: 9
    }
    .order-sm-10 {
        order: 10
    }
    .order-sm-11 {
        order: 11
    }
    .order-sm-12 {
        order: 12
    }
    .offset-sm-0 {
        margin-left: 0
    }
    .offset-sm-1 {
        margin-left: 8.3333333333%
    }
    .offset-sm-2 {
        margin-left: 16.6666666667%
    }
    .offset-sm-3 {
        margin-left: 25%
    }
    .offset-sm-4 {
        margin-left: 33.3333333333%
    }
    .offset-sm-5 {
        margin-left: 41.6666666667%
    }
    .offset-sm-6 {
        margin-left: 50%
    }
    .offset-sm-7 {
        margin-left: 58.3333333333%
    }
    .offset-sm-8 {
        margin-left: 66.6666666667%
    }
    .offset-sm-9 {
        margin-left: 75%
    }
    .offset-sm-10 {
        margin-left: 83.3333333333%
    }
    .offset-sm-11 {
        margin-left: 91.6666666667%
    }
}





.text-muted {
    color: #99a0ac!important
}

.block,
.card {
    background: #fff;
    border-width: 0;
    border-radius: .25rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
    margin-bottom: 1.5rem
}

.avatar {
    position: relative;
    line-height: 1;
    border-radius: 500px;
    white-space: nowrap;
    font-weight: 700;
    border-radius: 100%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 500px;
    box-shadow: 0 5px 10px 0 rgba(50, 50, 50, .15)
}

.avatar img {
    border-radius: inherit;
    width: 100%
}

.gd-primary {
    color: #fff;
    border: none;
    background: #448bff linear-gradient(45deg, #448bff, #44e9ff)
}


.gd-success {
    color: #fff;
    border: none;
    background: #31c971 linear-gradient(45deg, #31c971, #3dc931)
}



.gd-info {
    color: #fff;
    border: none;
    background: #14bae4 linear-gradient(45deg, #14bae4, #14e4a6)
}


.gd-warning {
    color: #fff;
    border: none;
    background: #f4c414 linear-gradient(45deg, #f4c414, #f45414)
}


@media (min-width:992px) {
    .page-container {
        max-width: 1140px;
        margin: 0 auto
    }
    .page-sidenav {
        display: block!important
    }
}


.list {
    padding-left: 0;
    padding-right: 0
}

.list-item {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word
}





.list-row .list-item {
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-align: center;
    align-items: center;
    padding: .75rem .625rem
}

.list-row .list-item>* {
    padding-left: .625rem;
    padding-right: .625rem
}



.no-wrap {
    white-space: nowrap
}



.text-color {
    color: #5e676f
}



.text-gd {
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    -moz-text-fill-color: transparent;
    text-fill-color: transparent
}



.text-sm {
    font-size: .825rem
}

.h-1x {
    height: 1.25rem;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical
}


.w-48 {
    width: 48px!important;
    height: 48px!important
}


a:link{

   text-decoration: none;
}
</style>
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


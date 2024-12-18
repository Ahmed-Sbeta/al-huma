<style>
    .has-sub .submenu {
    display: none; /* Hide submenu by default */
    position: absolute; /* Positioning relative to the parent */
    list-style-type: none; /* Remove bullet points */
    background: white; /* Background color */
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); /* Add shadow for better visibility */
    z-index: 1000; /* Ensure it appears above other content */
    width: 190px; /* Set a fixed width */
    left: 0; /* Align to the left of the parent */
    top: 100%; /* Directly below the toggle element */
    margin-top: 5px; /* Small gap between the toggle element and submenu */
}

.has-sub .submenu li a {
    color: black; /* Text color */
    padding: 12px 16px; /* Padding for each item */
    text-decoration: none; /* No underline */
    display: block; /* Makes the links span the full width of the menu */
}

.has-sub {
    position: relative;
    display: inline-block;
    padding-bottom: 10px; /* Adjust as necessary */
}
/* Show submenu on hover */
.has-sub:hover .submenu {
    display: block; /* Show the submenu */
}

/* Optional: Add styles for hover effect on submenu items */
.has-sub .submenu li a:hover {
    background-color: #f2f2f2; /* Light grey background on hover */
}
.header-btn {
    position: relative;
}
</style>

<!-- header -->
<header id="home" class="header-area" dir="rtl">            
            <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="/ar"><img src="{{asset('img/logo/logoo2.png')}}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-9">
                                <div class="responsive"><i class="icon dripicons-align-left"></i></div>
                                <div class="main-menu text-left text-xl-left">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-sub pl-5"><a href="/ar" style="font-family: 'Cairo';">الرئـيـسـيـة </a>
											
											</li>
                                            <li class="has-sub">
												<a href="/ar/about" style="font-family: 'Cairo';">عن الحومة</a>												
											</li>
                                            <li class="has-sub">
												<a href="/ar/ContactUs" style="font-family: 'Cairo';">تواصل معنـا</a>
											</li>
                                             <li class="has-sub">
												<a href="/ar/events" style="font-family: 'Cairo';">فـعـالـيـات</a>
												<!-- <ul>
													<li><a href="speakers.html" style="font-family: 'Cairo';">Family Events</a></li>
													<li><a href="speaker-details.html" style="font-family: 'Cairo';">Public Events</a></li>
												</ul> -->
											</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 text-left d-none d-xl-block">
                                @if(Auth::check())
                                <div class="header-btn second-header-btn">
                                    <div class="btn has-sub">
                                        <li class="text-center">
                                            <i class="far fa-user-alt">     {{Auth::user()->name}}</i>
                                            <!-- Submenu -->
                                            <ul class="submenu">
                                                <li><a href="/ar/profile">معلومات المستخدم</a></li>
                                                <li><a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">تسجيل الخروج</a></li>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                            </ul>
                                        </li>
                                    </div>
                                </div>
                                @else
                                <div class="header-btn second-header-btn">
                                     <a href="/ar/login" class="btn"><i class="far fa-user-alt"></i> تسجيل الدخول</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
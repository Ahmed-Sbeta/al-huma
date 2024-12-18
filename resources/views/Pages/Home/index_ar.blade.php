<!doctype html>
<html class="no-js" lang="zxx" dir="rtl">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Al-Huma</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
		<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/dripicons.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/default.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <style type="text/css">
.second-header-btn .btn {
	border: 2px solid #1e3333;
	font-size: 16px;
	background:#1e3333;
	font-weight: bold;
	color: #fff;
}
.second-header-btn .btn:hover {
	color: #fff;
	background:#1e3333;
}

            .slider-bg {
	min-height: 1000px !important;
	background-position: center;
	background-size: cover;
	position: relative;
	z-index: 1;
}
.slider-bg::before {
	content: "";
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background: url(../img/new/pic.jpg);
	opacity: .1;
	z-index: -1;
}

        h1,h2,h3,h4,h5,p,span,li,a{
          font-family: 'Cairo' !important;
        }
        .event-list-content .crical {
    position: absolute;
    background: #1e3333;
    right:900px;
    bottom: -73px;
    font-size: 30px;
    color: #fff;
    width: 200px;
    height: 200px;
    border-radius: 50%;
	padding: 50px;
}
        
      </style>
        
    </head>
    <body>
        @include('includes.header_ar')
        <!-- main-area -->
        <main>
            <!-- slider-area -->
            <section id="parallax" class="slider-area slider-bg second-slider-bg d-flex align-items-center justify-content-center fix" style="background-image:url(img/New/pic8.jpg)">
                <div class="slider-shape ss-one layer" data-depth="0.10"><img src="img/shape/slider_shape01.png" alt="shape"></div>
                <div class="slider-shape ss-two layer" data-depth="0.30"><img src="img/shape/slider_shape02.png" alt="shape"></div>
                <div class="slider-shape ss-three layer" data-depth="0.40"><img src="img/shape/slider_shape03.png" alt="shape"></div>
                <div class="slider-shape ss-four layer" data-depth="0.60"><img src="img/shape/slider_shape04.png" alt="shape"></div>
                <div class="slider-shape ss-five layer" data-depth="0.20"><img src="img/shape/slider_shape05.png" alt="shape"></div>
                <div class="slider-shape ss-six layer" data-depth="0.15"><img src="img/shape/slider_shape06.png" alt="shape"></div>
     			 <!-- <div class="slider-shape ss-eight layer" data-depth="0.50"><img src="img/man_header.png" alt="shape"></div> -->
                <div class="slider-active">
                    <div class="single-slider">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content second-slider-content">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s">
											<li><i class="fas fa-map-marker-alt"></i> طرابلس, ليبيا</li>
										</ul>
                                        <h2 data-animation="fadeInUp animated" data-delay=".4s">الحـومة <br></h2> 
                                        <h4 class="pb-50" style="color: white;" data-animation="fadeInUp animated" data-delay=".4s"> تنمية المجتمع ثقافيا ومعرفيا وتوعويا وفنيا، وتهتم بالتنشيط والفعاليات</h4>
										<div countdown class="conterdown wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s" data-date="">
										 <div class="timer">										 
											<div class="timer-outer bdr1">												
											   <span class="days" data-days>17</span> 
											   <div class="smalltext">حـواريات</div>
											   <div class="value-bar"></div>
											</div>
											<div class="timer-outer bdr2">
											   <span class="hours" data-hours>19</span> 
											   <div class="smalltext">ورش عمل</div>
											</div>
											<div class="timer-outer bdr3">
											   <span class="minutes" data-minutes>29</span> 
											   <div class="smalltext">أمسـيات</div>
											</div>
											<div class="timer-outer bdr4">
											   <span class="seconds" data-seconds>25</span> 
											   <div class="smalltext">مـعارض</div>
											</div>
											<p id="time-up"></p>
										 </div>
										 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->
            <!-- Category-area -->
            <section id="about" class="about-area about-p pt-120 p-relative" dir="rtl">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 justify-content-between">
                         <a href="/events"><div class="feature-box fadeInDown animated col-3" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="img/icon_111.png" alt="icon">
							</div>
							<h4 style="font-family: 'Cairo';">حـواريـات</h4>
						 </div></a>
						   <a href="/events"><div class="feature-box wow fadeInDown animated col-3" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="img/icon_22.png" alt="icon">
							</div>
							<h4 style="font-family: 'Cairo';">ورش عـمـل</h4>
						 </div></a>
						   <a href="/events"><div class="feature-box wow fadeInDown animated col-3" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="img/icon_33.png" alt="icon">
							</div>
							<h4 style="font-family: 'Cairo';">أمـسـيـات</h4>
						 </div></a>
                         <a href="/events"><div class="feature-box wow fadeInDown animated col-3" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="img/icon_44.png" alt="icon">
							</div>
							<h4 style="font-family: 'Cairo';">مـعـارض</h4>
						 </div></a> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- Category-area-end -->
			 <!-- about-area -->
             <section id="about" class="about-area about-p pb-120 p-relative" >
                <div class="container">
                    <div class="row align-items-center">                       
                        <div class="col-lg-6">
                            <div class="about-content s-about-content pl-30 text-right">
                                <div class="about-title second-atitle">
								<div class="text-outline wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
										<span>فعاليات</span>
									</div>
                                    <span class="wow fadeInUp animated text-right" data-animation="fadeInUp animated" data-delay=".3s" style="font-family: 'Cairo';">عـنا</span>
                                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s" style="font-family: 'Cairo';">من هم الحـومة</h2>
                                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".5s">تنمية المجتمع </h5>                                   </h5>
                                </div>
								<div class="wow fadeInDown animated " data-animation="fadeInUp animated" data-delay=".2s">
									<p style="font-family: 'Cairo'; font-size: 20px;">هي شركة ذات روح مؤسسية تعمل في مجال تنمية المجتمع ثقافيا ومعرفيا وتوعويا وفنيا،</p>
									 <p style="font-family: 'Cairo'; font-size: 20px;">وتهتم بالتنشيط والفعاليات بما يتيح إضافة نوعية في مسار الاستقرار المجتمعي في الحاضر نحو المستقبل.</p>
								   <a href="#" class="btn mt-20"><i class="far fa-ticket-alt"></i> انظم لنا</a>
							   </div>
                            </div>
                        </div>
						 <div class="col-lg-6">
                         <div class="s-video-wrap" style="background-image:url(img/About_pic.jpg)">
                                <div class="s-video-content">
                                    <a href="https://www.youtube.com/watch?v=rPOnHbgrNic" class="popup-video mb-50"><i class="fas fa-play"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
             <!-- blog-area -->
            <section id="blog" class="blog-area p-relative fix pt-100 pb-80">
			 
             <div class="container">
               <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>News</h2></div>
                <div class="row justify-content-center">
                     <div class="col-xl-8 col-lg-8">
                         <div class="section-title mb-80 ">
                             <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">فـعالـيات</span>
                             <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">أجدد الفـعاليات</h2>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 text-right">
                        
                     </div>
                 </div>
                 <div class="row blog-active2 wow fadeInDown animated text-right" data-animation="fadeInDown animated" data-delay=".2s">
                     <div class="col-lg-4 col-md-6">
                         <div class="single-post mb-30">
                             <div class="blog-thumb">
                                 <a href="blog-details.html"><img src="img/New/event1.jpg" alt="img" hight="100" width="300"></a>
                             </div>
                             <div class="blog-content">
                                 <div class="b-meta mb-20">
                                 <ul>
                                     <li><i class="fa fa-user ml-2"></i>قام 35 بالاشتراك</li>
                                     <li><a href="#"><i class="far fa-clock ml-2"></i>الخميس</a></li>
                                 </ul>
                                 </div>
                                 <h4><a href="blog-details.html">التصوير والتعديل بالهاتف</a></h4>
                                 <p>انضموا الينا في ورش عمل التصوير والتعديل باستعمال الهاتف فقط لتنمية مهارات التصوير لديك دون الحاجه الي كميرا</p>
                              
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="single-post mb-30">
                             <div class="blog-thumb">
                                 <a href="blog-details.html"><img src="img/New/event3.jpg" alt="img"></a>
                             </div>
                             <div class="blog-content">
                                 <div class="b-meta mb-20">
                                   <ul>
                                   <li><i class="fa fa-user ml-2"></i>قام 35 بالاشتراك</li>
                                   <li><a href="#"><i class="far fa-clock ml-2"></i>السبت</a></li>
                                 </ul>
                                 </div>
                                 <h4><a href="blog-details.html">أهمية الشباب في التنمية الاقتصادية</a></h4>
                                 <p>انظموا لنا في جلسة حوارية تتحدث عن اهمية الشباب في التنميه الاقتصادية مع المحاور طارق عياد نتحدث فيها عن منظور اقتصادي</p>
                                 
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="single-post mb-30">
                             <div class="blog-thumb">
                                 <a href="blog-details.html"><img src="img/New/event1.jpg" alt="img"></a>
                             </div>
                             <div class="blog-content">
                                 <div class="b-meta mb-20">
                                   <ul>
                                   <li><i class="fa fa-user ml-2"></i>قام 35 بالاشتراك</li>
                                   <li><a href="#"><i class="far fa-clock ml-2"></i>الخميس</a></li>
                                 </ul>
                                 </div>
                                 <h4><a href="blog-details.html">التصوير والتعديل بالهاتف</a></h4>
                                 <p>انضموا الينا في ورش عمل التصوير والتعديل باستعمال الهاتف فقط لتنمية مهارات التصوير لديك دون الحاجه الي كميرا</p>
                              
                                 
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- blog-area-end -->
             <!-- counter-area -->
            
            <!-- counter-area-end -->
			<!-- event -->
            <div class="event fix pt-120 pb-120">
			 <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>Event</h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">فـعـالـيـات</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">أبرز الفعاليات</h2>
                            </div>
                        </div>
                    </div>
                <div class="container">
				<div class="row">
			   <div class="col-lg-12 text-right">				
                  <nav class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                     <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#one" role="tab" aria-selected="true">
						<img src="img/tt-icon.png" alt="img" class="drk-icon">		
						<img src="img/t-w-icon1.png" alt="img" class="lgt-icon">  
						<div class="nav-content">
							<strong>حواريات</strong>
						</div>
						</a>
                        <a class="nav-item nav-link " id="nav-profile-tab" data-toggle="tab" href="#two" role="tab" aria-selected="false"><img src="img/tt-icon.png" alt="img" class="drk-icon">		
						<img src="img/t-w-icon1.png" alt="img" class="lgt-icon"> 
						<div class="nav-content">
							<strong>ورش عمل</strong>
						</div>
						</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#three" role="tab" aria-selected="false"><img src="img/tt-icon.png" alt="img" class="drk-icon">		
						<img src="img/t-w-icon1.png" alt="img" class="lgt-icon"> 
						<div class="nav-content">
							<strong>أمسيات</strong>
						</div>
						</a>
						<a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#four" role="tab" aria-selected="false"><img src="img/tt-icon.png" alt="img" class="drk-icon">		
						<img src="img/t-w-icon1.png" alt="img" class="lgt-icon"> 
						<div class="nav-content">
							<strong>مـعارض</strong>
						</div>
						</a>
                     </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s" id="nav-tabContent">
                     <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="nav-home-tab">
						<!-- row loop -->
                        <div class="row mb-30">
                           
                           <div class="col-lg-12">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i> صالة الشيخ ابوريانة, المدينة القديمة </li>
									<li><i class="far fa-clock"></i> 5:00 مساء - 9:00 مساء</li>
								 </ul>
								 <h2>اهمية الشباب في التنمية الاقتصادية</h2>
								 <p>الشباب يمثلون محوراً أساسياً في التنمية الاقتصادية لأي دولة بفضل قدرتهم على الابتكار والتكيف مع التكنولوجيات الجديدة، ما يساعد على تطوير حلول مبتكرة وتحسين الإنتاجية. كونهم جزءاً كبيراً من القوى العاملة، فإن مشاركتهم في سوق العمل تسهم في زيادة الإنتاج الكلي وتعزيز النمو الاقتصادي. كما يتميز الشباب بميولهم نحو ريادة الأعمال وإنشاء مشاريع جديدة، مما يخلق فرص عمل جديدة ويساعد على تنويع الاقتصاد.</p>
								 <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt pl-2"></i> اشتراك </a>
								 <a href="#" class="btn mt-20">اقراء المزيد</a>
								 <div class="crical"><i class="fal fa-arrow-left"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
						
                     </div>
                     <div class="tab-pane fade " id="two" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
								  <div class="title">  
									  <img src="img/event_avatar_1.png" alt="img">							  
									 <h5>Rosalina William</h5>
									 <p>UXX Deisgn</p>
								  </div>
								  <ul>
                                 <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                 <li><i class="fal fa-video"></i> Video Streming</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
									<li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
								 </ul>
								 <h2>UXX Design Trend Party 2019</h2>
								 <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
								 <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal arrow-right"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
						
                     </div>
                     <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="nav-contact-tab">
						<!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
								  <div class="title">  
									  <img src="img/event_avatar_4.png" alt="img">							  
									 <h5>Kimjing J. Jalim</h5>
									 <p>UX Deisgn</p>
								  </div>
								  <ul>
                                 <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                 <li><i class="fal fa-video"></i> Video Streming</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
									<li><i class="far fa-clock"></i>  9.30 - 10.30 AM</li>
								 </ul>
								 <h2>Intro Jiknim Jikis 2019</h2>
								 <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
								 <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal fa-arrow-right"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
                     </div>
					 <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="nav-contact-tab">
						<!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
								  <div class="title">  
									  <img src="img/event_avatar_2.png" alt="img">							  
									 <h5>Kelian M. Bappe</h5>
									 <p>youtubing</p>
								  </div>
								  <ul>
                                 <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                 <li><i class="fal fa-video"></i> Video Streming</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
									<li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
								 </ul>
								 <h2>Rokolo DJ Dancing 2019</h2>
								 <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
								 <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal fa-arrow-right"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
                     </div>
                  </div>
               </div>
			   <div class="col-lg-12 justify-content-center text-center">
				<a href="#" class="btn mt-20 mr-10">كل الـفـعاليـات  +</a>
			   </div>
			   </div>
            </div>
            </div>
            <!-- counter-area-end -->
			
            <!-- Sponsors-area -->
            
            <!-- Sponsors-area-end -->
           
            
        </main>
        <!-- main-area-end -->
        @include('includes.Footer_ar')

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

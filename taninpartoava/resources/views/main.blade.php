<!DOCTYPE html>
<html lang="en" >
<head>
	@include('layout.header')
	
</head>

<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header mo-left header-style-1">
        <!-- top bar -->
        <div class="top-bar no-skew">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="dez-topbar-left">
                        <ul class="social-bx list-inline  pull-left">
                            <li><a href="javascript:void(0);" ><i class="fa fa-phone"></i> +141 231 564 8970</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-envelope"></a> info@example.com</li>
                        </ul>
                    </div>
                    <div class="dez-topbar-right">
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="javascript:void(0);" class="fab fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion dark">
						<a href="index.html">
							<img src="images/logo-black.png" width="193" height="89" alt="">
						</a>
					</div>
                    <!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="جستجو">
                            <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
                            <li class="active"> <a href="javascript:;">صفحات اصلی<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">خانه 1</a></li>
                                    <li><a href="index-2.html">خانه 2</a></li>
                                    <li><a href="index-3.html">خانه 3</a></li>
                                    <li><a href="index-4.html">خانه 4</a></li>
									<li><a href="index-5.html">خانه 5</a></li>
									<li><a href="index-6.html">خانه 6</a></li>
									<li><a href="index-7.html">خانه 7</a></li>
									<li><a href="index-8.html">خانه 8</a></li>
									<li><a href="index-9.html">خانه 9 </a></li>
									<li><a href="index-10.html">خانه 10 </a></li>
									<li><a href="index-11.html">خانه 11 </a></li>
									<li><a href="index-12.html">خانه 12 </a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">امکانات<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="javascript:;">هدر <span class="tag-new">جدید</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="header-style-1.html">هدر 1</a></li>
                                            <li><a href="header-style-2.html">هدر 2</a></li>
                                            <li><a href="header-style-3.html">هدر 3</a></li>
                                            <li><a href="header-style-4.html">هدر 4</a></li>
                                            <li><a href="header-style-5.html">هدر 5</a></li>
											<li><a href="header-style-6.html">هدر 6 <span class="tag-new">جدید</span></a></li>
											<li><a href="header-style-7.html">هدر 7 <span class="tag-new">جدید</span></a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">فوتر</a>
                                        <ul class="sub-menu">
                                            <li><a href="footer-fixed.html">فوتر ثابت</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-mega-menu "> <a href="javascript:;">صفحات<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li> <a href="javascript:;">صفحات</a>
                                        <ul>
                                            <li><a href="about-1.html">درباره ما 1</a></li>
                                            <li><a href="about-2.html">درباره ما 2</a></li>
											<li><a href="faq.html">سوالات متداول</a> </li>
											<li><a href="project.html">پروژه ها <span class="tag-new">جدید</span></a></li>
											<li><a href="project-details.html">جزئیات پروژه <span class="tag-new">جدید</span></a></li>
                                            <li><a href="all-service.html">همه سرویس ها </a></li>
                                            <li><a href="architecture.html">معماری </a></li>
                                            <li><a href="big-projects.html">پروژه های بزرگ </a></li>
											<li><a href="construction.html">ساخت و ساز </a></li>
											<li><a href="consulting.html">مشاوره </a></li>
											<li><a href="concrete-transport.html">حمل و نقل بتن </a></li>
											
										</ul>
                                    </li>
                                    <li> <a href="javascript:;">صفحات</a>
                                        <ul>
											<li><a href="renovations.html">نوسازی </a></li>
											<li><a href="services-1.html">سرویس 1 </a></li>
											<li><a href="services-2.html">سرویس 2</a></li>
											<li><a href="services-3.html">سرویس 3</a></li>
											<li><a href="career.html">حرفه</a></li>
											<li><a href="who-we-are.html">درباره ما</a></li>
                                            <li><a href="portfolio-1.html">نمونه کارها 1</a></li>
                                            <li><a href="portfolio-2.html">نمونه کارها 2</a></li>
                                            <li><a href="portfolio-3.html">نمونه کارها 3</a></li>
                                            <li><a href="portfolio-details.html">جزئیات نمونه کار</a></li>
											<li><a href="full-page-gallery-dark.html">گالری تمام صفحه 1</a></li>
											
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">صفحات</a>
                                        <ul>
											<li><a href="full-page-gallery-light.html">گالری تمام صفحه 2</a></li>
                                            <li><a href="gallery-grid-2.html">گالری جدولی 2</a></li>
											<li><a href="gallery-grid-3.html">گالری جدولی 3</a></li>
                                            <li><a href="gallery-grid-4.html">گالری جدولی 4</a></li>
                                            <li><a href="error-403.html">خطای 403</a></li>
                                            <li><a href="error-404.html">خطای 404</a></li>
                                            <li><a href="error-405.html">خطای 405</a></li>
											<li><a href="coming-soon-1.html">به زودی 1</a></li>
											<li><a href="coming-soon-2.html">به زودی 2</a></li>
											<li><a href="coming-soon-3.html">به زودی 3</a></li>
											<li><a href="coming-soon-4.html">به زودی 4</a></li>
										</ul>
                                    </li>
									<li> <a href="javascript:;">صفحات</a>
										<ul>
											<li><a href="coming-soon-5.html">به زودی 5</a></li>
											<li><a href="coming-soon-6.html">به زودی 6</a></li>
											<li><a href="coming-soon-7.html">به زودی 7</a></li>
											<li><a href="coming-soon-8.html">به زودی 8</a></li>
											<li><a href="coming-soon-9.html">به زودی 9</a></li>
											<li><a href="login-1.html">ورود 1</a></li>
											<li><a href="login-2.html">ورود 2</a></li>
											<li><a href="login-3.html">ورود 3</a></li>
											<li><a href="login-4.html">ورود 4</a></li>
											<li><a href="login-5.html">ورود 5</a></li>
											<li><a href="login-6.html">ورود 6</a></li>
										</ul>
									</li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">فروشگاه<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="product.html">محصول  </a></li>
									<li><a href="product-2.html">محصول 2 </a></li>
                                    <li><a href="product-details.html">جزئیات محصول</a></li>
                                    <li><a href="my-account.html">اکانت من <span class="tag-new">جدید</span></a></li>
                                    <li><a href="wishlist.html">لیست علاقه مندیها <span class="tag-new">جدید</span></a></li>
                                    <li><a href="shopping-cart.html">سبد خرید <span class="tag-new">جدید</span></a></li>
                                </ul>
                            </li>
                            <li class="has-mega-menu "> <a href="javascript:;">بلاگ<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li> <a href="javascript:;">پیش فرض</a>
                                        <ul>
                                            <li><a href="blog-half-img.html">نیم تصویر</a></li>
                                            <li><a href="blog-half-img-sidebar.html">نیم تصویر با نوار کناری</a></li>
                                            <li><a href="blog-half-img-left-sidebar.html">نیم تصویر با نوار کناری سمت چپ</a></li>
                                            <li><a href="blog-large-img.html">تصویر بزرگ</a></li>
                                            <li><a href="blog-large-img-sidebar.html">تصویر بزرگ با نوار کناری</a></li>
                                            <li><a href="blog-large-img-left-sidebar.html">تصویر بزرگ با نوار کناری سمت چپ</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">جدولی</a>
                                        <ul>
                                            <li><a href="blog-grid-2.html">جدولی 2</a></li>
                                            <li><a href="blog-grid-2-sidebar.html">جدولی 2 با نوار کناری</a></li>
                                            <li><a href="blog-grid-2-sidebar-left.html">جدولی 2 با نوار کناری سمت چپ</a></li>
                                            <li><a href="blog-grid-3.html">جدولی 3</a></li>
                                            <li><a href="blog-grid-3-sidebar.html">جدولی 3 با نوار کناری</a></li>
                                            <li><a href="blog-grid-3-sidebar-left.html">جدولی 3 با نوار کناری سمت چپ</a></li>
                                            <li><a href="blog-grid-4.html">جدولی 4</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">تکی</a>
                                        <ul>
                                            <li><a href="blog-single.html">تکی</a></li>
                                            <li><a href="blog-single-sidebar.html">تکی با نوار کناری</a></li>
                                            <li><a href="blog-single-left-sidebar.html">تکی با نوار کناری سمت راست</a></li>
                                        </ul>
                                    </li>
									<li> <a href="javascript:;">بلاگ تمام صفحه</a>
										<ul>
											<li><a href="blog-full-grid-dark-style-1.html">استایل تاریک 1</a></li>
											<li><a href="blog-full-grid-dark-style-2.html">استایل تاریک 2</a></li>
											<li><a href="blog-full-grid-dark-style-3.html">استایل تاریک 3</a></li>
											<li><a href="blog-full-grid-light-style-1.html">استایل روشن 1</a></li>
											<li><a href="blog-full-grid-light-style-2.html">استایل روشن 2</a></li>
											<li><a href="blog-full-grid-light-style-3.html">استایل روشن 3</a></li>
										</ul>
									</li>
                                </ul>
                            </li>
                            <li class="has-mega-menu "> <a href="javascript:;">عناصر صفحات<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li> <a href="javascript:;">عناصر صفحات</a>
                                        <ul>
                                            <li><a href="shortcode-buttons.html">دکمه ها <span class="tag-new">جدید</span></a></li>
                                            <li><a href="shortcode-icon-box-styles.html">استایل جعبه های آیکون</a></li>
                                            <li><a href="shortcode-pricing-table.html">جدول قیمت گذاری</a></li>
                                            <li><a href="shortcode-toggles.html">ضامن ها</a></li>
                                            <li><a href="shortcode-team.html">تیم <span class="tag-new">جدید</span></a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">عناصر صفحات</a>
                                        <ul>
                                            <li><a href="shortcode-carousel-sliders.html">کاروسل</a></li>
                                            <li><a href="shortcode-image-box-content.html">محتوای تصویر</a></li>
                                            <li><a href="shortcode-tabs.html">تب ها</a></li>
                                            <li><a href="shortcode-counters.html">شمارنده ها</a></li>
                                            <li><a href="shortcode-light-box.html">گالری روشن <span class="tag-new">جدید</span></a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">عناصر صفحات</a>
                                        <ul>
                                            <li><a href="shortcode-accordians.html">آکوردئون</a></li>
                                            <li><a href="shortcode-dividers.html">تقسیم کننده</a></li>
                                            <li><a href="shortcode-images-effects.html">جلوه های عکس</a></li>
                                            <li><a href="shortcode-testimonials.html">نظر کاربران <span class="tag-new">جدید</span></a></li>
                                            <li><a href="shortcode-magnific-popup.html">گالری 2 <span class="tag-new">جدید</span></a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">عناصر صفحات</a>
                                        <ul>
                                            <li><a href="shortcode-alert-box.html">جعبه هشدار</a></li>
                                            <li><a href="shortcode-icon-box.html">جعبه آیکون</a></li>
                                            <li><a href="shortcode-list-group.html">لیست گروه ها</a></li>
                                            <li><a href="shortcode-title-separators.html">جدا کننده عنوان</a></li>
                                            <li><a href="shortcode-all-widgets.html">ابزارک ها</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">ارتباط با ما <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">ارتباط با ما 1</a></li>
                                    <li><a href="contact-2.html">ارتباط با ما 2</a></li>
                                    <li><a href="contact-3.html">ارتباط با ما 3</a></li>
                                    <li><a href="contact-4.html">ارتباط با ما 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner rev-slider-rtl">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                        <!-- START REVOLUTION SLIDER 5.3.0.2  -->
                        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide4.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="بعدی" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " 
										id="slide-100-layer-1" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
										data-width="full"
										data-height="full"
										data-whitespace="nowrap"
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										
										style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
									</div>
										
									<!-- LAYER NR. 2 [ for title ] -->
									<div class="tp-caption tp-resizeme" 
										id="slide-100-layer-2" 
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['200','170','170','140']" 
										data-fontsize="['70','60','50','40']"
										data-lineheight="['70','60','50','40']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
							 
										data-type="text" 
										data-responsive_offset="on" 
										data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: 'dana';">از ایده تا ایجاد</span> 
									</div>
									
									<!-- LAYER NR. 3 [ for paragraph] -->
									<div class="tp-caption  tp-resizeme" 
										id="slide-100-layer-3" 
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['290','270','245','200']" 
										data-fontsize="['18','18','18','16']"
										data-lineheight="['30','30','30','24']"
										data-width="['800','800','600','400']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
							 
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
										]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;"> <span>با درک قوی از تنوع، ما طراحی منحصر به فردی از سازه ها و سایر راه حل های انحصاری با معمار ایجاد می کنیم. ما متفکران و رویاپردازان، سازندگان، ایجاد نور، نصب و تولیدات برای خانه ها، آموزش، هتل ها و موارد دیگر هستیم</span> 
									</div>
									
									<!-- LAYER NR. 4 [ for readmore botton ] -->
									<div class="tp-caption tp-resizeme" 	
										id="slide-100-layer-4"						
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['400','390','390','340']" 
										data-fontsize="['none','none','none','none']"
										data-lineheight="['none','none','none','none']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[ 
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
										]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										
										style="z-index: 13;"><a href="javascript:void(0);" class="site-button button-skew"><span>اطلاعات بیشتر</span><i class="fa fa-angle-right"></i></a> 
									</div>
                                </li>
                                <!-- SLIDE 2 -->
                                <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide5.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="بعدی" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide5.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper" 
										id="slide-200-layer-1" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
										data-width="full"
										data-height="full"
										data-whitespace="nowrap"
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										
										style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
									</div>
									
									<!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption tp-resizeme" 
										id="slide-200-layer-2" 
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['200','170','170','140']" 
										data-fontsize="['70','60','50','40']"
										data-lineheight="['70','60','50','40']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
							 
										data-type="text" 
										data-responsive_offset="on" 
										data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: 'dana';">از ایده تا ایجاد</span> 
									</div>
									
                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme" 
										id="slide-200-layer-3" 
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['290','270','245','200']" 
										data-fontsize="['18','18','18','16']"
										data-lineheight="['30','30','30','24']"
										data-width="['800','800','600','400']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
							 
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
										]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 13; 
										font-weight: 500; 
										color: rgba(255, 255, 255, 0.85);
										border-width:0px;"> <span>با درک قوی از تنوع، ما طراحی منحصر به فردی از سازه ها و سایر راه حل های انحصاری با معمار ایجاد می کنیم. ما متفکران و رویاپردازان، سازندگان، ایجاد نور، نصب و تولیدات برای خانه ها، آموزش، هتل ها و موارد دیگر هستیم</span> 
									</div>
									
									<!-- LAYER NR. 4 [ for readmore botton ] -->
									<div class="tp-caption tp-resizeme" 	
										id="slide-200-layer-4"						
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['400','390','390','340']" 
										data-fontsize="['none','none','none','none']"
										data-lineheight="['none','none','none','none']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[ 
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
										]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										
										style="z-index: 13;"><a href="javascript:void(0);" class="site-button button-skew"><span>اطلاعات بیشتر</span><i class="fa fa-angle-right"></i></a> 
									</div>
                                </li>
                                <!-- SLIDE 3 -->
                                <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide6.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="بعدی" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide6.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " 
										id="slide-300-layer-1" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
										data-width="full"
										data-height="full"
										data-whitespace="nowrap"
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										
										style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
									</div>
                                    
									<!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption tp-resizeme" 
										id="slide-300-layer-2" 
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['200','170','170','140']" 
										data-fontsize="['70','60','50','40']"
										data-lineheight="['70','60','50','40']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
							 
										data-type="text" 
										data-responsive_offset="on" 
										data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: 'dana';">از ایده تا ایجاد</span> 
									</div>
									
                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme" 
										id="slide-300-layer-3" 
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['290','270','245','200']" 
										data-fontsize="['18','18','18','16']"
										data-lineheight="['30','30','30','24']"
										data-width="['800','800','600','400']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
							 
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
										]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 13; 
										font-weight: 500; 
										color: rgba(255, 255, 255, 0.85);
										border-width:0px;"> <span>با درک قوی از تنوع، ما طراحی منحصر به فردی از سازه ها و سایر راه حل های انحصاری با معمار ایجاد می کنیم. ما متفکران و رویاپردازان، سازندگان، ایجاد نور، نصب و تولیدات برای خانه ها، آموزش، هتل ها و موارد دیگر هستیم</span> 
									</div>
									
                                    <!-- LAYER NR. 4 [ for readmore botton ] -->
                                    <div class="tp-caption tp-resizeme" 	
										id="slide-300-layer-4"						
										data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['400','390','390','340']" 
										data-fontsize="['none','none','none','none']"
										data-lineheight="['none','none','none','none']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[ 
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
										]'
										data-textAlign="['right','right','right','right']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										
										style="z-index: 13;"><a href="javascript:void(0);" class="site-button button-skew"><span>اطلاعات بیشتر</span><i class="fa fa-angle-right"></i></a> 
									</div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- Slider END -->
        <!-- meet & ask -->
        <div class="section-full overlay-primary-dark " style="background-image: url(images/background/bg4.jpg); background-attachment: fixed; position: relative; z-index: 1;">
            <div class="container">
                <div class="row p-tb30">
                    <div class="col-lg-6 col-md-6" id="align">
                        <div class="icon-bx-wraper clearfix text-white left">
                            <div class="icon-xl "> <span class=" icon-cell"><i class="flaticon-buildings"></i></span> </div>
                            <div class="icon-content">
                                <h3 class="dez-tilte text-uppercase m-b10">سوالات</h3>
                                <p>شما نیازها ، رویاها و اهداف پروژه خود را با ما در میان خواهید گذاشت. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-t20"> 
						<a href="#" class="site-button-secondry m-l10">
						<span>ارتباط با ما </span><i class="fa fa-angle-left m-l10"></i></a>
						<a href="#" class="site-button-secondry m-l20">
						<span>اطلاعات بیشتر </span><i class="fa fa-angle-left m-l10"></i></a>
					</div>
                </div>
            </div>
        </div>
        <!-- meet & ask END -->
        <!-- About Company -->
        <div class="section-full  bg-gray content-inner-1" style="background-image: url(images/bg-img.png); background-repeat: repeat-x; background-position: left bottom -37px;">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-7">
                            <h2 class="text-uppercase"> درباره شرکت</h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-secondry style-skew"></div>
                            </div>
                            <div class="clear"></div>
                            <p><strong>Constructzilla آماده ساختن شماست. ما بهترین خدمات ساختمانی را به مشتریان خود ارائه می دهیم و بهترین طراحی ساختمان را ایجاد می کنیم که باید به آن افتخار کنید. برای تحقق ایده شما ، ما به زیبایی و خلاقیت برای رویای خود کار می کنیم.</strong></p>
                            <p class="m-b50">ما متفکران و رویاپردازان ، نصب سازنده و محصول ساختمانها هستیم. ما هتل ها ، بیمارستان های اقامتی و اماکن ورزشی را ساخته و ساخته ایم. ما به این کار اختصاص داده ایم که رویای شما را متناسب با همه نیازها و اولویت های شما بسازیم. ما می فهمیم که موفقیت ما با کارمندان ما شروع و خاتمه می یابد ، بنابراین سعی می کنیم با سطح تخصصی کار عالی را به مشتریان خود ارائه دهیم. </p>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-sm bg-secondry "> <span class="icon-cell"><i class="flaticon-buildings text-primary"></i></span> </div>
                                        <div class="icon-content">
                                            <h3 class="dez-tilte text-uppercase">ساخت و ساز</h3>
                                            <p>ما بهترین پروژه ساخت و ساز را برای شما ارائه می دهیم.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-sm bg-secondry "> <span class="icon-cell"><i class="flaticon-house text-primary"></i></span> </div>
                                        <div class="icon-content">
                                            <h3 class="dez-tilte text-uppercase">معماری</h3>
                                            <p>خدمات معمار ما طراحی سطح بالایی را برای شما.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-sm bg-secondry "> <span class="icon-cell"><i class="flaticon-technical-support text-primary"></i></span> </div>
                                        <div class="icon-content">
                                            <h3 class="dez-tilte text-uppercase">مشاوره</h3>
                                            <p>تیم مشاوره ما همیشه آماده کمک به شما هستند.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-sm bg-secondry "> <span class="icon-cell"><i class="flaticon-mechanical-arm text-primary"></i></span> </div>
                                        <div class="icon-content">
                                            <h3 class="dez-tilte text-uppercase">مکانیکی</h3>
                                            <p>ما از نظر مکانیکی برای ساختن ساختمان شما. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="dez-thu m"><img src="images/worker3.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <!-- Our Projects  -->
        <div class="section-full bg-img-fix content-inner-1 overlay-black-middle" style="background-image:url(images/background/bg1.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="text-uppercase">پروژه های ما</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-white style-skew"></div>
                    </div>
                    <p>به دلیل بهترین کیفیت و خدمات ، پیروزی همیشه هدف ما بوده است ، ما فقط بهترین استعدادها را به خاطر می آوریم. ما با راهنمایی ، سادگی و صداقت صحیح همه کارهایی را برای شما انجام خواهیم داد که بتواند شما را راحت کند.</p>
                </div>
                <div class="portfolio-carousel mfp-gallery gallery owl-carousel owl-btn-center-lr lightgallery">
                    <div class="item">
                        <div class="ow-portfolio">
                            <div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/middle/pic1.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> 
										<span data-exthumbimage="images/our-work/thumb/pic1.jpg" data-src="images/our-work/large/pic1.jpg" class="icon-bx-xs check-km" title="گالری روشن جدولی 1">		
											<i class="far fa-image"></i> 
										</span>
										<a href="project-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a> 
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-portfolio">
                            <div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/middle/pic2.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> 
										<span data-exthumbimage="images/our-work/thumb/pic2.jpg" data-src="images/our-work/large/pic2.jpg" class="icon-bx-xs check-km" title="گالری روشن جدولی 1">		
											<i class="far fa-image"></i> 
										</span>
										<a href="project-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a> 
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-portfolio">
                            <div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/middle/pic3.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> 
										<span data-exthumbimage="images/our-work/thumb/pic3.jpg" data-src="images/our-work/large/pic3.jpg" class="icon-bx-xs check-km" title="گالری روشن جدولی 1">		
											<i class="far fa-image"></i> 
										</span>
										<a href="project-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a> 
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-portfolio">
                            <div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/middle/pic4.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> 
										<span data-exthumbimage="images/our-work/thumb/pic4.jpg" data-src="images/our-work/large/pic4.jpg" class="icon-bx-xs check-km" title="گالری روشن جدولی 1">		
											<i class="far fa-image"></i> 
										</span>
										<a href="project-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a> 
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-portfolio">
                            <div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/middle/pic5.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> 
										<span data-exthumbimage="images/our-work/thumb/pic5.jpg" data-src="images/our-work/large/pic5.jpg" class="icon-bx-xs check-km" title="گالری روشن جدولی 1">		
											<i class="far fa-image"></i> 
										</span>
										<a href="project-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a> 
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-portfolio">
                            <div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/middle/pic6.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> 
										<span data-exthumbimage="images/our-work/thumb/pic6.jpg" data-src="images/our-work/large/pic6.jpg" class="icon-bx-xs check-km" title="گالری روشن جدولی 1">		
											<i class="far fa-image"></i> 
										</span>
										<a href="project-details.html"> <i class="fa fa-link icon-bx-xs"></i> </a> 
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Projects END -->
        <!-- Architecture -->
        <div class="section-full  bg-white content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase"> معماری</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-secondry style-skew"></div>
                    </div>
                    <p>ما خدمات متنوعی از جمله مطالعات عملی ، برنامه نویسی معماری و مدیریت پروژه را ارائه می دهیم. قطعاً احساس کار ما شما را متحیر می کند. شما در سیستم کار ما صافی و دقت را پیدا خواهید کرد.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="flaticon-building text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">ایمنی</h5>
                                <p>با بهترین کیفیت و خدمات ما همچنان بر ایمنی و حفاظت متمرکز هستیم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="flaticon-chat-group text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">انجمن</h5>
                                <p>ما در مورد پروژه با بهترین اعضای تیم خود کار خواهیم کرد و بحث خواهیم کرد تا تعریف کنیم ... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="flaticon-solar-energy text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">پایداری</h5>
                                <p>ما یک پروژه ساخت و ساز فوق العاده برای آرزوها و آرزوهای شما ارائه می دهیم ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="flaticon-quality text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">بهترین کیفیت</h5>
                                <p>ما به بهترین کیفیت نسبت به کمیت اعتقاد داریم. ما همیشه بهترین تلاش را برای مشتریان خود داریم تا ... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="flaticon-integrated-system text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">تمامیت</h5>
                                <p>ما ابتدا بالاترین سطح اعتماد و صداقت را با مشتریان خود ایجاد می کنیم ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b10">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="flaticon-strategy text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">استراتژی</h5>
                                <p>ما طرح اصلی خود را با حفظ نیازهای مردم ، که همیشه ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Architecture END-->
        <!-- Company staus -->
        <div class="section-full text-white bg-img-fix content-inner overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="flaticon-buildings"></i></div>
                            <div class="counter font-26 font-weight-800 text-primary m-b5">1035</div>
                            <span>کارشناسان فعال</span> </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="flaticon-costumer"></i></div>
                            <div class="counter font-26 font-weight-800 text-primary m-b5">1226</div>
                            <span>مشتری راضی</span> </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="flaticon-development"></i></div>
                            <div class="counter font-26 font-weight-800 text-primary m-b5">1552</div>
                            <span>توسعه دهنده</span> </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b10">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="flaticon-finish-flag"></i></div>
                            <div class="counter font-26 font-weight-800 text-primary m-b5">1156</div>
                            <span>پروژه تکمیل شده</span> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company staus END -->
        <!-- Team member -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="text-uppercase"> با تیم ما آشنا شوید</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-secondry style-skew"></div>
                    </div>
                    <p>تیم هوشمند ما از همه امور مراقبت می کند. کل تیم از ابتدا تا انتها عالی کار کرده اند. تیم ما روی هدف و بهترین خدمات متمرکز است. </p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 dez-team">
							<div class="dez-box m-b30">
								<div class="dez-media dez-media-left dez-img-overlay6 dez-img-effect "> 
									<a href="javascript:;"> <img src="images/our-team/pic5.jpg" alt=""> </a>
									<div class="dez-info-has ">
										<ul class="dez-social-icon border">
											<li><a href="javascript:void(0);" class="fab fa-facebook-f bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-twitter bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-google-plus-g bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-linkedin-in bg-primary"></a></li>
										</ul>
									</div>
								</div>
								<div class="p-a10 bg-primary text-center">
									<h4 class="dez-title text-uppercase text-white m-a5"><a href="javascript:;">محمد نبی</a></h4>
									<span class="dez-member-position">توسعه دهنده</span> 
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 dez-team">
							<div class="dez-box m-b30">
								<div class="dez-media dez-media-left dez-img-overlay6 dez-img-effect "> 
									<a href="javascript:;"> <img src="images/our-team/pic6.jpg" alt=""> </a>
									<div class="dez-info-has ">
										<ul class="dez-social-icon border">
											<li><a href="javascript:void(0);" class="fab fa-facebook-f bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-twitter bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-google-plus-g bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-linkedin-in bg-primary"></a></li>
										</ul>
									</div>
								</div>
								<div class="p-a10 bg-primary text-center">
									<h4 class="dez-title text-uppercase m-a5"><a href="javascript:;">محمد نبی</a></h4>
									<span class="dez-member-position">سئو</span> 
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 dez-team">
							<div class="dez-box m-b30">
								<div class="dez-media dez-media-left dez-img-overlay6 dez-img-effect "> 
									<a href="javascript:;"> <img src="images/our-team/pic7.jpg" alt=""> </a>
									<div class="dez-info-has ">
										<ul class="dez-social-icon border">
											<li><a href="javascript:void(0);" class="fab fa-facebook-f bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-twitter bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-google-plus-g bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-linkedin-in bg-primary"></a></li>
										</ul>
									</div>
								</div>
								<div class="p-a10 bg-primary text-center">
									<h4 class="dez-title text-uppercase m-a5"><a href="javascript:;">فهیمه زرین</a></h4>
									<span class="dez-member-position">کارگردان</span> 
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 dez-team">
							<div class="dez-box m-b10">
								<div class="dez-media dez-media-left dez-img-overlay6 dez-img-effect "> 
									<a href="javascript:;"> <img src="images/our-team/pic8.jpg" alt=""> </a>
									<div class="dez-info-has ">
										<ul class="dez-social-icon border">
											<li><a href="javascript:void(0);" class="fab fa-facebook-f bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-twitter bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-google-plus-g bg-primary"></a></li>
											<li><a href="javascript:void(0);" class="fab fa-linkedin-in bg-primary"></a></li>
										</ul>
									</div>
								</div>
								<div class="p-a10 bg-primary text-center">
									<h4 class="dez-title text-uppercase m-a5"><a href="javascript:;">جیمز کنت</a></h4>
									<span class="dez-member-position">مدیر</span> 
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team member END -->
        <!-- Latest blog -->
        <div class="section-full content-inner-1 ">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase">پست های اخیر بلاگ</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-secondry style-skew"></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="blog-carousel mfp-gallery owl-carousel gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-blog-post date-style-2">
                                <div class="ow-post-media dez-img-effect zoom-slow"> <img src="images/our-work/pic1.jpg" alt=""> </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="#" title="Video post">برنامه ریزی ساخت و ساز</a> </h4>
                                    </div>
                                    <div class="ow-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 خرداد</strong> <span> 1400</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>توسط <a href="javascript:;">رامین</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">2 کامنت</a> </li>
                                        </ul>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                                    </div>
                                    <div class="ow-post-readmore "> <a href="#" title="اطلاعات بیشتر" rel="bookmark" class=" site-button-link"> اطلاعات بیشتر <i class="fa fa-angle-double-left"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2">
                                <div class="ow-post-media dez-img-effect zoom-slow"> <img src="images/our-work/pic2.jpg" alt=""> </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="#" title="Video post">برنامه ریزی ساخت و ساز</a> </h4>
                                    </div>
                                    <div class="ow-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 خرداد</strong> <span> 1400</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>توسط <a href="javascript:;">رامین</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">2 کامنت</a> </li>
                                        </ul>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                                    </div>
                                    <div class="ow-post-readmore "> <a href="#" title="اطلاعات بیشتر" rel="bookmark" class=" site-button-link"> اطلاعات بیشتر <i class="fa fa-angle-double-left"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2">
                                <div class="ow-post-media dez-img-effect zoom-slow"> <img src="images/our-work/pic3.jpg" alt=""> </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="#" title="Video post">برنامه ریزی ساخت و ساز</a> </h4>
                                    </div>
                                    <div class="ow-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 خرداد</strong> <span> 1400</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>توسط <a href="javascript:;">رامین</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">2 کامنت</a> </li>
                                        </ul>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                                    </div>
                                    <div class="ow-post-readmore "> <a href="#" title="اطلاعات بیشتر" rel="bookmark" class=" site-button-link"> اطلاعات بیشتر <i class="fa fa-angle-double-left"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2">
                                <div class="ow-post-media dez-img-effect zoom-slow"> <img src="images/our-work/pic4.jpg" alt=""> </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="#" title="Video post">برنامه ریزی ساخت و ساز</a> </h4>
                                    </div>
                                    <div class="ow-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 خرداد</strong> <span> 1400</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>توسط <a href="javascript:;">رامین</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">2 کامنت</a> </li>
                                        </ul>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                                    </div>
                                    <div class="ow-post-readmore "> <a href="#" title="اطلاعات بیشتر" rel="bookmark" class=" site-button-link"> اطلاعات بیشتر <i class="fa fa-angle-double-left"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2">
                                <div class="ow-post-media dez-img-effect zoom-slow"> <img src="images/our-work/pic5.jpg" alt=""> </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="#" title="Video post">برنامه ریزی ساخت و ساز</a> </h4>
                                    </div>
                                    <div class="ow-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 خرداد</strong> <span> 1400</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>توسط <a href="javascript:;">رامین</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">2 کامنت</a> </li>
                                        </ul>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                                    </div>
                                    <div class="ow-post-readmore "> <a href="#" title="اطلاعات بیشتر" rel="bookmark" class=" site-button-link"> اطلاعات بیشتر <i class="fa fa-angle-double-left"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2">
                                <div class="ow-post-media dez-img-effect zoom-slow"> <img src="images/our-work/pic6.jpg" alt=""> </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="#" title="Video post">برنامه ریزی ساخت و ساز</a> </h4>
                                    </div>
                                    <div class="ow-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 خرداد</strong> <span> 1400</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>توسط <a href="javascript:;">رامین</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">2 کامنت</a> </li>
                                        </ul>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                                    </div>
                                    <div class="ow-post-readmore "> <a href="#" title="اطلاعات بیشتر" rel="bookmark" class=" site-button-link"> اطلاعات بیشتر <i class="fa fa-angle-double-left"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest blog END -->
        <!-- Testimonials blog -->
        <div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url(images/background/bg2.jpg);">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="text-uppercase">رضایت مشتریان</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-white  style-skew"></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="testimonial-one owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">مریم بوبانی</strong> <span class="testimonial-position">متخصص رسانه</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">مریم بوبانی</strong> <span class="testimonial-position">متخصص رسانه</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">مریم بوبانی</strong> <span class="testimonial-position">دانش آموز</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials blog END -->
        <!-- Client logo -->
        <div class="section-full dez-we-find bg-img-fix p-t50 p-b50 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo4.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client logo END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
     @include('layout.footer')
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up style3" ></button>
</div>

<!-- JavaScript  files ========================================= -->
@include('layout.js')
</body>
</html>

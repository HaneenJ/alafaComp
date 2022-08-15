<!DOCTYPE html>
<html lang="ar" direction="rtl", dir="rtl">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>جمعية العفاف للتوفيق بين الراغبين في الزواج</title>
    <meta content="قال رسول الله(صلى الله عليه وسلم) : ما بني بناء في الاسلام أحب الى الله من التزويج" name="description">
    <meta content="" name="keywords">
    <meta property="og:site_name" content="جمعية العفاف  للتوفيق بين الراغبين في الزواج " />
    <meta property="og:title" content=" جمعية العفاف  للتوفيق بين الراغبين في الزواج" />
    <meta property="og:description"
        content="قال رسول الله(صلى الله عليه وسلم) : ما بني بناء في الاسلام أحب الى الله من التزويج " />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="جمعية العفاف  للتوفيق بين الراغبين في الزواج " />

    <meta property="og:image" content="{{ asset('front/assets/img/logo.png') }}" />



    <!-- Favicons -->
    <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('front/assets/css/variables.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('front/assets/css/variables-blue.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-green.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-orange.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-purple.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-red.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-pink.css') }}" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/custom-style.css') }}" rel="stylesheet">


    <!-- New Lines  -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

    <!-- Owl Carousel  -->
    <link href="{{ asset('front/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('front/assets/css/buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/task.css') }}" rel="stylesheet">

    @yield('css')

    <!-- =======================================================
  * Template Name: HeroBiz - v2.2.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('front/assets/img/logo.png') }}" alt=""> -->
                <h1><span><img src="{{ asset('front/assets/img/logo.png') }}"></span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>



                       <l><a class="nav-link scrollto {{ Route::currentRouteName() == 'frontend.index' ? 'active' : '' }}" href="{{  url('') }}">الصفحة الرئيسية</a></l>
                     <li><a class="nav-link scrollto  {{ Route::currentRouteName() == 'about-us' ? 'active' : '' }}" href="#">من نحن</a></li>
                    <li class="dropdown"><a href="#"><span>الاجتماعت والشراكات</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('manager') }}" class="{{ Route::currentRouteName() == 'managers' ? 'active' : '' }}">مجلس الادارة</a></li>
                            <li><a href="{{ route('publicAssociations') }}" class="{{ Route::currentRouteName() == 'general-assembly' ? 'active' : '' }}">الجمعية العمومية</a></li>
                            <li><a href="{{ route('adminstrative') }}"  class="{{ Route::currentRouteName() == 'adminstrative-systems' ? 'active' : '' }}">الأنظمة الادارية والسياسات</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto {{ Route::currentRouteName() == 'ecommerce' ? 'active' : '' }}" href="#">المتجر الالكتروني</a></li>
                    <li class="dropdown"><a href="#"><span>البرامج</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a class="{{ Route::currentRouteName() == 'meetings.courses.details' ? 'active' : '' }}" href="#">اللقاءات والدورات </a></li>
                            <li><a class="{{ Route::currentRouteName() == 'consultations' ? 'active' : '' }}" href="#">الاستشارات </a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto {{ Route::currentRouteName() == 'news' ? 'active' : '' }}" href="#">الاْخبار</a></li>
                    <li><a class="nav-link scrollto {{ Route::currentRouteName() == 'jobs' ? 'active' : '' }}" href="{{ route('jobs') }}">الوظائف</a></li>
                    <li><a class="nav-link scrollto {{ Route::currentRouteName() == 'questionnaire' ? 'active' : '' }}" href="#">استبيان وقياس</a></li>


                    <li><a class="nav-link scrollto {{ Route::currentRouteName() == 'terms-conditions' ? 'active' : '' }}" href="#">الشروط والاْحكام</a></li>
                    <li><a class="nav-link scrollto {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="#">اتصل بنا</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->



        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->





    <!-- ======= hero Section ======= -->




    <!-- End Hero Section -->
  @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">


        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="image">
                        <img style="width:150px;background-color:#fff;border-radius:25px;padding:10px;margin-bottom:10px" src="{{ asset('front/assets/img/logo.png') }}">
                    </div>
                    <h3>
                        جمعية العفاف
                    </h3>
                    <br>
                    <h4><i class="fa fa-envelope fa-fw"></i> info@alafaf.org.sa</h4>
                    <h4><i class="fa fa-phone fa-fw"></i> 0126177733</h4>
                    <h4><i class="fa fa-phone fa-fw"></i> 055829995</h4>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">

                    <h3>التواصل الاْجتماعي</h3>
                    <br>

                    <a target="_blank" href="https://www.facebook.com/people/%D8%A7%D9%84%D8%B9%D9%81%D8%A7%D9%81-%D8%A7%D9%84%D8%B9%D9%81%D8%A7%D9%81/100056221140571/" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/AlafafSa" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCJWtyQvAjIagNcbj7TnKNOw" class="youtube"><i class="bi bi-youtube"></i></a>
                    <a target="_blank" href="https://www.instagram.com/alafafsa/" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>

            </div>
        </div>

        <div class="under-footer">

        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/php-email-form/validate.j') }}s"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>

</html>

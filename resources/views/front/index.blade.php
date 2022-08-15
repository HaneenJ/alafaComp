@extends('front.parent')

@section('content')
    <div class="latest_news" style="padding:40px 0;background-color:#eee;padding-top:200px">
        <div class="container">
            <div style="">
                <div style="width:10%;float:right;margin-top:10px">
                    <span>اْخر الاْخبار</span>
                </div>
                  <div style="width:90%;float:left">
                  
                    
                            <marquee style="width:100%;padding:10px;background-color:#fff;border-bottom:2px solid #cb3434"
                                behavior=scroll direction="right" scrollamount="5">
                            جمعية العفاف للتوفيق بين الراغبين في الزواج
                            </marquee>
                    
                       
                 </div>
                <div class="clear-both"></div>
            </div>
            <!-- <hr style="width:100%;height:4px;color:#cb3434;background-color:#cb3434"> -->
        </div>
    </div>

    <section class="carousel" data-bs-ride="carousel" data-bs-interval="">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('front/assets/img/sliders/slider1.jpg') }}" class="d-block w-100" alt="...">
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h5>.eeeeeeeeeeeeee..</h5>
                        <p>..xxxxxxxxxxx.</p>
                    </div> -->
                </div>

                <div class="carousel-item active">
                    <img src="{{ asset('front/assets/img/sliders/slider1.jpg') }}" class="d-block w-100" alt="...">
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h5>.eeeeeeeeeeeeee..</h5>
                        <p>..xxxxxxxxxxx.</p>
                    </div> -->
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/assets/img/sliders/slider2.jpg') }}" class="d-block w-100" alt="...">
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h5>.wwwwwwwwwwwwwww..</h5>
                        <p>..wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwxxxxxxxxxxxxxxxxxx.</p>
                    </div> -->
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section><!-- End Hero Section -->
    <!-- End Hero Section -->



    <!-- <section class="news">
        <div class="container">
            <div class="owl-carousel">
                @foreach ($news as $item)
            <div class="box">
                            <h4>   </h4>
                            <p>الخبذ</p>
                        </div>
            @endforeach

                <div class="box">
                    <h4>الخبر الاْول</h4>
                    <p>الخبر الاْول الخبر الاْولالخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول</p>
                </div>
                <div class="box">
                    <h4>الخبر الاْول</h4>
                    <p>الخبر الاْول الخبر الاْولالخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول الخبر الاْول</p>
                </div>
              
            </div>
        </div>
    </section> -->

    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h1 class="main-title" style="font-size:60px">جمعية العفاف للتوفيق بين الراغبين في الزواج</h1>
                    <h6>جمعية خيرية غير هادفة للربح، تعنى بالمساهمة مع الأسرة المسلمة في اختيار الزوجة أو الزوج الكفء
                        لأبنائهم وبناتهم، وفقاً للمعايير والشروط الشرعية.</h6>
                </div>



                <div class="row">
                    <!-- <div class="col-md-5">
                        <div class="image">
                            <img style="width:100%;margin-top:10px;height:620px" src="{{ asset('front/assets/img/about-us.jpg') }}" alt="">
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <!-- <h4 class="text-center" style="font-weight:bold;color:#0ea2bd;margin-bottom:50px">ما هي جمعية العفاف ؟ </h4> -->
                        <div class="row text-center">
                            <div class="col-md-6 text-center">
                                <div class="about-box">
                                    <div class="icon">
                                        <i class="fa fa-eye fa-3x" style="color:red"></i>
                                    </div>
                                    <h4 class="text-center">رؤية جمعية العفاف</h4>
                                    <p class="text-center">الوجهة الآمنة و الموثوقة للراغبين في الزواج</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-box">
                                    <div class="icon">
                                        <i class="fa fa-file fa-3x" style="color:green"></i>
                                    </div>
                                    <h4 class="text-center">رسالة جمعية العفاف</h4>
                                    <p class="text-center">نمنح النصح و الاستشارة الآمنة ، بسرية تامة حول اختيار الشريك
                                        الكفؤ من خلال المعاييرالدقيقة و الضوابط الشرعية لتحقيق التوافق الامثل و الاستدامة
                                        الاسرية بين الطرفين </p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="about-box">
                                    <div class="icon">
                                        <i class="fa fa-star fa-3x" style="color:tomato"></i>
                                    </div>
                                    <h4 class="text-center">قيمنا</h4>
                                    <p> المصداقية ، الامانة ، النزاهة ، الالتزام ، التميز و الاحترافية</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-box">
                                    <div class="icon">
                                        <i class="fa fa-cog fa-3x" style="color:#0ea2bd"></i>
                                    </div>
                                    <h4 class="text-center">شعارنا</h4>
                                    <p class="text-center">حيث الاختيار الآمن</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" style="background-color:#0ea2bd;color:#fff" class="featured-services">
            <div class="container">

                <div class="section-header">
                    <h1 style="font-weight:bold">خدماتنا</h1>

                </div>

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-balloon-heart-fill icon"></i></div>
                            <h4><a href="" class="stretched-link">خدمة التوفيق</a></h4>
                            <p>تقدم الجمعية خدمة التوفيق بين الراغبين في الزواج </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-card-checklist icon"></i></div>
                            <h4><a href="" class="stretched-link"> الاستشارات </a></h4>
                            <p>جمعية العفاف لديها قسم خاص بالاستشارات الاسرية واختيارات شريك الحياة </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">البرامج والدورات</a></h4>
                            <p>هنالك العديد من البرامج والدورات التي تقدمها جمعية العفاف</p>
                        </div>
                    </div><!-- End Service Item -->

                    <!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" style="background-color: #eee;" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>أعضاء مجلس الادارة</h2>
                    <!-- <p>مجلس ادارة الجمعية</p> -->
                </div>

                <div class="row gy-5">
                @foreach ($teams as $team )
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img" style="width:100%">
                                <img style="width:100%" src="{{ $team->image_path }}" class=""
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $team->name }}</h4>
                                <span>{{ $team->position }}</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->


                @endforeach



                </div>

                <a href="{{ route('teamDetails') }}" class="main-button">
                    <span>عرض المزيد</span>
                    <span></span>
                    <span></span>
                </a>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Services Section ======= -->
        <section id="services"  style="background-color:#0ea2bd;color:#fff" class="services">
            <div class="container" data-aos="fade-up">
    
                <div class="section-header mb-3">
                    <h1>اللقاءات والدورات</h1>
                    <!-- <h6> البرامج والدورات التي تقدمها الجمعية </> -->
                </div>
    
                <div class="row gy-5 mt-4">
    
                    <div class="col-xl-4 col-md-6 mt-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-heart-half"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>اختيار شريك الحياة</h3>
                                </a>
                                <p style="color:#333">تقدم خدمة اختيار شريك الحياة ومساعدة الشخص على الاختيار المناسب</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
    
                    <div class="col-xl-4 col-md-6 mt-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-file-earmark-play-fill"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>دورة العمل الجماعي</h3>
                                </a>
                                <p style="color:#333">تساعد الشباب الجمعية على اكتساب مهارة العمل الجماعي </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
    
                    <div class="col-xl-4 col-mt-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item mt-2">
                            <div class="img">
                                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-diagram-3-fill"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>دورة التطوع</h3>
                                </a>
                                <p style="color:#333"> تقدم خدمة التطوع والارشاد</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
    
    
    
                </div>
    
                <a href="{{ route('courses') }}" class="main-button">
                    <span>عرض المزيد</span>
                    <span></span>
                    <span></span>
                </a>
    
            </div>
        </section><!-- End Services Section -->
    

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <h3>شركاء النجاح</h3>

                <div class="owl-carousel" style="padding:40px 0">
                    <div class="image text-center"><img style="width:150px"
                            src="{{ asset('front/assets/img/clientS.jpg') }}" class="" alt=""></div>
                    <div class="image text-center"><img style="width:150px"
                            src="{{ asset('front/assets/img/clientS.jpg') }}" class="" alt=""></div>
                    <div class="image text-center"><img style="width:150px"
                            src="{{ asset('front/assets/img/clients/شربف اعلان_0.jpg') }}" class=""
                            alt=""></div>
                    <div class="image text-center"><img style="width:150px"
                            src="{{ asset('front/assets/img/clients/smart-work.png') }}" class="" alt="">
                    </div>
                    <div class="image text-center"><img style="width:150px"
                            src="{{ asset('front/assets/img/clientS.jpg') }}" class="" alt=""></div>
                    <div class="image text-center"><img style="width:150px"
                            src="{{ asset('front/assets/img/clientS.jpg') }}" class="" alt=""></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div
                        class="col-lg-7 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first text-center">
                        <h3>خدمة التوفيق</em> </h3>
                        <p> ابحث عن شريك العمر</p>
                        <div class="text-center">
                            <a target="_blank" class="cta-btn" style="margin-top:0;width:200px"
                                href="https://alafaf.org.sa/ar">قدم طلبك الأن</a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 order-first order-md-last d-flex align-items-center text-center">
                        <div class="img">
                            <img style="width:100%" src="{{ asset('front/assets/img/concept.jpg') }}" alt=""
                                class="">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= On Focus Section ======= -->
        <section id="onfocus" class="onfocus">
            <div class="container-fluid p-0" data-aos="fade-up">

                <div class="row g-0">

                    <div class="col-lg-12">
                        <div class="content d-flex flex-column justify-content-center h-100"
                            style="background-color:blue">
                            <h3 style="font-size:40px;color:#333;margin-bottom:30px">التبرع للجمعية </h3>
                            <div class="donate-content">
                                <p style="font-size:25px;" class="fst-italic">

                                    <span>قال رسول الله<i class="fa fa-heart fa-lg fa-fw" style="color:red"></i> </span>
                                    <br>
                                    <br>
                                    <span class="text">«مَا نَقَصَ مَالُ عَبْدٍ مِنْ صَدَقَة..»</span>
                                </p>
                                <br>
                                <ul>
                                    <li style="font-size:25px;">الحسابات الخاصة بالجمعية</li>
                                    <li style="font-size:25px;">000000000000455</li>
                                    <li style="font-size:25px;">0752400000000000</li>
                                </ul>
                                <!-- <a href="#" class="read-more align-self-start"><span> تبرع الآن</span><i
                                        class="bi bi-arrow-right"></i></a> -->

                                <a href="" class="main-button" style="margin:0;margin:auto">
                                    <span>تبرع الاْن</span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End On Focus Section -->













    </main><!-- End #main -->
@endsection

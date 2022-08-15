@extends('front.parent')

@section('content')


<section class="meetings_details news" style="height:300px;margin-bottom:0;margin-top:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">المركز الاْعلامي</h3>


        </div>
    </div>
</section>

<section class="course_single_box news" style="margin-top:0;padding-top:0">
    <div class="container">

        <!-- <h3 class="main-title">الاْخبار</h3> -->


        <div class="news-section">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="news-box">
                        <div class="image">
                            <img src="{{ asset('front/assets/img/slider.jpg') }}" alt="">
                        </div>
                        <div class="news-content">
                            <h4>جمعية العفاف للتوفيق بين الراغبين فى الزواج</h4>
                            <p>جمعية العفاف للتوفيق بين الراغبين فى الزواج توقع مذكره تعاون مع مركز تاْلف الاْستشارات الاْسرية</p>
                            <a href="{{ route('news.details') }}" class="news-details-button">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="news-box">
                        <div class="image">
                            <img src="{{ asset('front/assets/img/slider2.jpg') }}" alt="">
                        </div>
                        <div class="news-content">
                            <h4>جمعية العفاف للتوفيق بين الراغبين فى الزواج</h4>
                            <p>جمعية العفاف للتوفيق بين الراغبين فى الزواج توقع مذكره تعاون مع مركز تاْلف الاْستشارات الاْسرية</p>
                            <a href="{{ route('news.details') }}" class="news-details-button">التفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
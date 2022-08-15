@extends('front.parent')

@section('css')
    <style>
        .new_about .about-description h3
        {
            font-weight: bold;
            font-size:30px;
            margin-bottom:20px
        }

        .new_about .about-description p
        {
            font-size:20px;
        }

        .new_about .about-box
        {
            width: 100%;
            text-align:center;
            background-color: #fff;
            padding:15px;
            transition : .5s;
            margin-bottom: 40px;
            min-height : 350px
        }

        .new_about .about-box .image
        {
            width: 100%;
            transition : 1s
        }

        .new_about .about-box .image img
        {
            width: 50%;
            transition : 1s
        }

        .new_about .about-box:hover img
        {
            transform : rotate(360deg)
        }

        .new_about .about-box:hover
        {
            transform : translateY(-10px)
        }

        .new_about .about-box h4
        {
            margin : 0;
            font-weight:bold;
            font-size:20px;
            padding:20px 0;
            position : relative
        }

        .new_about .about-box h4::after
        {
            content : '';
            position: absolute;
            width:30%;
            height : 5px ;
            border-radius : 25px;
            background-color: var(--color-red);
            left : 50%;
            transform : translateX(-50%);
            bottom : 0
        }

        .new_about .about-box p
        {
            margin-top : 20px
        }

        .new_about .about-box.green h4::after
        {
            background-color: #5c935c;
        }
        
        .new_about .about-box.orange h4::after
        {
            background-color: orange;
        }

        .new_about .about-box.purple h4::after
        {
            background-color: purple;
        }

    </style>
@endsection

@section('content')

<section class="meetings_details about" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">من نحن</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes new_about">
    <div class="container">


        <div class="row">
            <div class="col-md-12">
                <div class="about-description">
                    <h3>ما هي جمعية العفاف</h3>
                    <p>جمعية خيرية غير هادفة للربح، تعنى بالمساهمة مع الأسرة المسلمة في اختيار الزوجة أو الزوج الكفء لأبنائهم وبناتهم، وفقاً للمعايير والشروط الشرعية.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="about-box">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/new_about/ab1.png') }}" alt="">
                                <h4>شعارنا</h4>
                                <p>حيث الاْختيار الاْمن</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="about-box green">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/new_about/ab2.png') }}" alt="">
                                <h4>الروْية</h4>
                                <p>الوجهة الآمنة و الموثوقة للراغبين في الزواج</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="about-box purple">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/new_about/ab3.png') }}" alt="">
                                <h4>الرسالة</h4>
                                <p>نمنح النصح و الاستشارة الآمنة ، بسرية تامة حول اختيار الشريك الكفؤ من خلال المعايير الدقيقة و الضوابط الشرعية لتحقيق التوافق الامثل و الاستدامة الاسرية بين الطرفين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="about-box prange">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/new_about/ab4.png') }}" alt="">
                                <h4>قيمنا</h4>
                                <p>المصداقية ، الامانة ، النزاهة ، الالتزام ، التميز و الاحترافية</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>

@endsection
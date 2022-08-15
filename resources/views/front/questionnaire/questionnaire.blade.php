@extends('front.parent')

@section('content')

<section class="meetings_details questionnaire" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">اْستبيان وقياس</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes" style="background-color:#fff">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="manager-box">
                    <div class="image">
                        <img src="{{ asset('front/assets/img/55.jpg') }}" alt="">
                    </div>
                    <h4>اْستمارة قياس رضا زوار جمعية قمم الشبابية</h4>
                    <a href="" class="main-button" style="margin:auto;height:40px">
                        <span> تعبئة الاْستبيان</span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="manager-box">
                    <div class="image">
                        <img src="{{ asset('front/assets/img/55.jpg') }}" alt="">
                    </div>
                    <h4>اْستمارة قياس رضا المستفيدين من الجمعية</h4>
                    <a href="" class="main-button" style="margin:auto;height:40px">
                        <span> تعبئة الاْستبيان</span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="manager-box">
                    <div class="image">
                        <img src="{{ asset('front/assets/img/55.jpg') }}" alt="">
                    </div>
                    <h4>اْستمارة قياس رضا الموظفين فى الجمعية</h4>
                    <a href="" class="main-button" style="margin:auto;height:40px">
                        <span> تعبئة الاْستبيان</span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
           
        </div>

    </div>
</section>

@endsection
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
            @foreach ($items  as $item )
            <div class="col-md-4">
                <div class="manager-box">
                    <div class="image">
                        <img src="{{ asset('front/assets/img/55.jpg') }}" alt="">
                    </div>
                    <h4>{{ $item->title }}</h4>
                    <a href="{{ $item->url }}" target="_blank" class="main-button" style="margin:auto;height:40px">
                        <span> تعبئة الاْستبيان</span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</section>

@endsection

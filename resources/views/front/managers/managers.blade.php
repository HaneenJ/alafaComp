@extends('front.parent')

@section('content')

<section class="meetings_details managers" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">محاضر اْجتماعات مجلس الاْدارة</h3>


        </div>
    </div>
</section>


<section class="meetings_boxes" style="background-color:#fff">
    <div class="container">

        <h3>إجتماعات مجلس الإدارة في جمعية قمم الشبابية</h3>

        <br><br>

        <div class="row">

            @foreach ($items as $item )
            <div class="col-md-3">
                <div class="manager-box">
                    <div class="image">
                        <img src="{{ asset('front/assets/img/نمغع.webp') }}" alt="">
                    </div>
                    <h4>{{ $item->title }}</h4>
                    <a href="{{ $item->file_path }}" target="_blank" class="main-button" style="margin:auto;height:35px">
                        <span>تنزيل</span>
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

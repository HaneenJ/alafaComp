@extends('front.parent')

@section('content')




<section class="course_single_box" style="margin:0">
    <div class="container">

        <h3 style="font-size:60px;margin-top:80px" class="main-title">تفاصيل الوظيفة</h3>


        <div class="row">
            <div class="col-md-8" style="margin:auto">
                <div class="image">
                    <img style="width:100%" src="{{ $items->image_path }}" alt="">
                </div>
                <br>
                <h4 style="font-weight:bold">{{ $items->title }}</h4><br>
                <p> {{ $items->descriptions }}</p>
            </div>
        </div>

    </div>
</section>

@endsection
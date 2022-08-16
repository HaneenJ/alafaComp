@extends('front.parent')

@section('content')

<section class="meetings_details general" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">محاضر اْجتماعات الجمعية العمومية</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes">
    <div class="container">


        <div class="row">

            @foreach ( $items as $item )
                <div class="col-md-3">
                    <div class="manager-box">
                        <div class="image">
                            <a href="{{ $item->file_path }}" target="_blank"><img src="{{ asset('front/assets/img/slider3.jpeg') }}" alt=""></a>
                        </div>
                        <h3 style="color:tomato;font-size:22px;padding:10px 0;line-height:40px">{{ $item->title }}</h3>
                    </div>
                </div>
            @endforeach
           
           
        </div>



    </div>
</section>

@endsection
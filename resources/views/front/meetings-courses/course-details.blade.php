@extends('front.parent')

@section('content')


<section class="course_single_box" style="margin:0">
    <div class="container">

        <h3 style="font-size:60px" class="main-title"> {{ $courses->title }}  </h3>


        <div class="row">
            <div class="col-md-4">
                <div class="image">
                    <img style="width:100%" src="{{ $courses->image_path }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <ul class="list-group">
                    <li class="list-group-item"><b>عنوان الكورس :</b> {{ $courses->title }}   </li>
                    <li class="list-group-item"><b>نبذه عن الكورس :</b>  {{ $courses->descriptions }}          </li>
                    <li class="list-group-item"><b>وصف الكورس:</b> {{ $courses->descriptions }}   </li>
                </ul>
            </div>
        </div>

    </div>
</section>

@endsection
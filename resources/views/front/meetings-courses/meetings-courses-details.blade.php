@extends('front.parent')

@section('content')

<section class="meetings_details" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">البرامج والدورات</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes">
    <div class="container">

        <form action="{{ route('courses') }}"  method="get">
            <div class="search-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><b>عنوان الدورة</b></label>
                            <input type="text" name="search" class="form-control" value="{{ request()->search }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><b>التصنيف</b></label>
                            <select name="type"  class="form-control">
                                <option value="" style="font-weight:bold">-اْختر-</option>                                
                                <option value="online" {{ request()->type =='online' ? 'selected' : '' }}> اْونلاين</option>
                                <option value="onSite" {{ request()->type =='onSite' ? 'selected' : '' }}> حضورية</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-danger">بحث</button>
                    </div>
                </div>
            </div>
            <div class="courses-box">
                
                <div class="row">

                    @foreach ($courses as $course)
                    <div class="col-xl-4 col-lg-6 col-sm-12">
                        <div class="course-box">
                            <div class="image">
                                <img src="{{$course->image_path }}" alt="">
                            </div>
                            <h4>{{ $course->title }}</h4>
                            <p>{{ $course->descriptions }}</p>
                            <a href="{{ route('coursesDetails',$course->id) }}" class="main-button">
                                <span>تفاصيل الدورة</span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>  
                    @endforeach
                     
               
                    
                </div>

            </div>
        </form>


    </div>
</section>

@endsection
@extends('front.parent')

@section('content')


<section class="meetings_details jobs" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">الوظائف</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes">
    <div class="container">

        <form action="{{ route('jobs') }}" method="get">
            <div class="search-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><b>عنوان الوظيفة</b></label>
                            <input type="text" name="search" class="form-control" placeholder= "بحث" value="{{ request()->search }}">

                 
                        </div>
                    </div>
                     
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-danger">بحث</button>
                    </div>
                </div>
            </div>
            <div class="courses-box">
                
                <div class="row">

                    @foreach ( $data as $item)
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="course-box">
                                <div class="image">
                                    
                                </div>
                                <h4>{{@ $item->title }}</h4>
                                <p>{{@ $item->descriptions }}</p>
                                <a href="{{ route('jobDetails',$item->id ??'') }}" class="main-button">
                                    <span>تفاصيل الوظيفة</span>
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
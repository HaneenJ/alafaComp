@extends('front.parent')

@section('content')

<section class="meetings_details system" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">الاْنظمة الاْدارية والسياسية</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes">
    <div class="container">


        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        قوائم الإداريين في جمعية  عفاف  
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="row">
                            @foreach ($adminstratives as $adminstrative )
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>{{ $adminstrative->title }}</h4>
                                    <a href="{{ $adminstrative->file_path }}" target="_blank" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                           
                             
                        </div>

                    </div>

                </div>
            </div>

            <!------------------------ 2 ------------------------>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        اللائحة الأساسية والأهداف في جمعية عفاف  
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            @foreach ($targets as $item )
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>{{ $item->title }}</h4>
                                    <a href="{{ $item->file_path }}" target="_blank" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                           
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------ 3 ------------------------>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                        التقارير الإدارية والمالية في جمعية عفاف 
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            @foreach ($financially as $item )
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>  {{ $item->title }}</h4>
                                    <a href="{{ $item->file_path }}" target="_blank" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                          
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------ 4 ------------------------>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                        السياسات واللوائح في جمعية عفاف  
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            @foreach ($polices as  $item)
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>{{ $item->title }}</h4>
                                    <a href="{{ $item->file_path }}" target="_blank" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                           
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------ 5 ------------------------>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                         الخطط   في جمعية عفاف  
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            @foreach ($paln as $item )
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4> {{ $item->title }}</h4>
                                    <a href="{{ $item->file_path }}" target="_blank" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                         الانجازات   في جمعية عفاف  
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            @foreach ($aqchievement as $item )
                                
                            @endforeach
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>{{ $item->title }}</h4>
                                    <a href="{{ $item->file_path }}" target="_blank" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
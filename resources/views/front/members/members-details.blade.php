@extends('front.parent')

@section('content')

    <section class="member_details" style="margin:0">
        <div class="overlay">
            <div class="container">
                
                <h3>اْعضاء مجلس الاْدارة</h3>

                
            </div>
        </div>
    </section>

    <section class="member_boxes">
        <div class="container">
            
           
            <div class="row">
                @foreach ($teams as $team )
                    <div class="col-md-4">
                        <div class="member-box">
                            <div class="image">
                                <img src="{{ $team->image_path }}" alt="">
                            </div>
                            <div class="title">
                                <h3>   {{ $team->name }}</h3>
                                <p> {{ $team->position }}    </p>
                            </div>
                        </div>
                    </div>
              @endforeach
            
            </div>
          
            
        </div>
    </section>

@endsection


@extends('front.parent')


@section('content')
 <section id="" class="p-0">
      
 
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('front/assets/img/hero-fullscreen-bg.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2>محاضر إجتماعات الجمعية العمومية</span></h2>
      <p> اهلا وسهلا .</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('front/assets/img/hero-fullscreen-bg.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2>محاضر إجتماعات الجمعية العمومية</span></h2>
      <p> اهلا وسهلا .</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('front/assets/img/hero-fullscreen-bg.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2>محاضر إجتماعات الجمعية العمومية</span></h2>
      <p> اهلا وسهلا .</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>
  </section>

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

    <ul class="nav nav-tabs row gy-4 d-flex">

      <li class="nav-item col-6 col-md-4 col-lg-2">
        <a class="nav-link   show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <i class="bi bi-download color-cyan"></i>
          <h4>الاجتماع الاول </h4>
          <button class="btn btn-info mt-2">تنزيل</button>
        </a>
      </li><!-- End Tab 1 Nav -->

      <li class="nav-item col-6 col-md-4 col-lg-2">
        <a class="nav-link   show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <i class="bi bi-download color-cyan"></i>
          <h4>الاجتماع التاني </h4>
          <button class="btn btn-info mt-2">تنزيل</button>
        </a>
      </li><!-- End Tab 1 Nav -->

      <li class="nav-item col-6 col-md-4 col-lg-2">
        <a class="nav-link   show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <i class="bi bi-download color-cyan"></i>
          <h4>الاجتماع التالت </h4>
          <button class="btn btn-info mt-2">تنزيل</button>
        </a>
      </li><!-- End Tab 1 Nav -->
    </ul>


  </div>
</section><!-- End Features Section -->

@endsection

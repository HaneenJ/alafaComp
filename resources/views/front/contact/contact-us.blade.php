@extends('front.parent')

@section('content')

<section class="meetings_details contact" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">اْتصل بنا</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes">
    <div class="container">

        <section id="contact" class="contact">
            <div class="container">


            </div>

            
            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info" style="border-top:8px solid #0ea2bd;bacgkround-color:#fff">
                            <h3>تواصل معنا</h3>
                            <br>

                            <div class="info-item d-flex">
                                <i style="font-size:25px" class="fa fa-map-marker fa-fw"></i> &nbsp;&nbsp;
                                <div>
                                    <h4>العنوان:</h4>
                                    <p>المملكة العربية السعودية , جده - حي العزيزية - شارع وادي فاظمة</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i style="font-size:25px" class="fa fa-envelope fa-fw"></i> &nbsp;&nbsp;
                                <div>
                                    <h4>الايميل:</h4>
                                    <p>info@alafaf.org.sa</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i style="font-size:25px" class="fa fa-phone fa-fw"></i> &nbsp;&nbsp;
                                <div>
                                    <h4>رقم الجوال:</h4>
                                    <p>0126177733</p>
                                    <p>0558299955</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="الاْسم كاملا" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="البريد الاْليكتروني" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="عنوان الرسالة" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="الرسالة" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">ارسال الرسالة</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section>


    </div>
</section>

@endsection
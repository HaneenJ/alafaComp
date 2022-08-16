@extends('front.parent')

@section('content')

<section class="meetings_details terms-conditions" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">الشروط والاْحكام</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes">
    <div class="container">

        <h3><b>شروط التسجيل في الموقع</b> :- <br><br></h3>
        <h4>هذا الموقع تم تصميمه لخدمة الراغبين والراغبات في الزواج لكلا الجنسين ولجميع الجنسيات سواء كانت سعودية او غير
            سعودية وفق ضوابط شرعيةوسرية تامة و يكون من نتاجها أسرة مسلمة .

            وإليك أخي الفاضل وأختي الفاضلة شروط التسجيل واستخدام الموقع الالكتروني لجمعية العفاف للتوفيق بين الراغبين في
            الزواج :</h4>

        <br>
        <hr>
        <br>

        <ol>


            @foreach ($conditions as $condition )
                <li>{{ $condition->condition }}</li>


            @endforeach

        </ol>

    </div>
</section>

@endsection

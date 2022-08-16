@extends('layout.main')
@section('title', 'اضافة شروط واحكام   ')
@section('css')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <form class="form d-flex flex-column flex-lg-row" id="create-form">
                <!--begin::Aside column-->


                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->

                    <!--end:::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>اضافة شروط واحكام </h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="title" class="form-label required"> العنوان </label>
                                                <input type="text" class="form-control form-control-solid" id="title"
                                                    name="title">
                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="title" class="form-label required">الشرط</label>
                                                <textarea name="condition" id="condition" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>


                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <button type="reset" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">الغاء</button>
                        <!--end::Button-->
                        <!--begin::Button-->


                        <button type="button" onclick="performStore()" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->


@endsection
@section('js')
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>


    <script src=" {{ asset('asset(js/ckeditor/ckeditor.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('title', document.getElementById('title').value);
            formData.append('condition', document.getElementById('condition').value);
            store('/dashboard/conditions', formData), '/dashboard/conditions/create';

        }
    </script>


@stop

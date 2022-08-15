@extends('layout.main')
@section('title', 'الاخبار')
@section('css')
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">

                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Filter-->



                            <!--begin::Add customer-->
                            <a href="{{ route('news.create') }}"   class="btn btn-primary"
                                data-bs-target="#kt_modal_add_customer"> اضافة  </a>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->

                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body  ">
                    <!--begin::Table-->
                    <table id="kt_datatable_example_5"
                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                        <thead>
                            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                <th> الرقم # </th>
                                <th>العنوان</th>
                                <th>الملف ا لمرفق</th>
                                <th>أنشئ بتاريخ</th>
                                <th> العمليات</th>


                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as  $data)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $data->title }} </td>

                                    <td> <a href="{{ $data->file_path }}" target="_blank"> الملف المرفق</a></td>

                                    <td>{{ $data->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('news.edit', $data->id) }}"
                                            class="btn btn-icon btn-info"><i class="las la-edit fs-2 me-2"></i></a>
                                        <a href="#" onclick="confirmDestroy('{{ $data->id }}',this)"
                                            class="btn btn-icon btn-danger"><i class="las la-trash fs-2 me-2"></i>
                                        </a>


                                    </td>

                                </tr>
                            @empty
                                <h6> no data fount</h6>
                            @endforelse


                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection


@section('js')
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>

    <script>
        {{-- $("#kt_datatable_example_5").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        }); --}}
    </script>

    <script>
        function confirmDestroy(id, reference) {
            Swal.fire({
                title: 'هل أنت متأكد؟',
                text: "لن تتمكن من التراجع عن هذا!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم،احذفه!',
                cancelButtonText: 'الغاء'
            }).then((result) => {
                if (result.isConfirmed) {
                    destroy(id, reference);
                }
            });
        }

        function destroy(id, reference) {
            //JS - Axios
            axios.delete('/dashboard/news/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
                    showMessage(response.data);
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    showMessage(error.response.data);
                })

        }

        function showMessage(data) {
            Swal.fire({
                icon: data.icon,
                title: data.title,
                showConfirmButton: false,
                timer: 1500
            });
        }
    </script>


@stop

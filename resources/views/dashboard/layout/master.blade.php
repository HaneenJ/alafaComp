<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
    @include('layout.aside._base')
    <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @include('dashboard.layout.header._base')
            {{--@include("layout.toolbars._toolbar-1")--}}
            @yield('content')
            {{--@include("layout._content")--}}
            @include("dashboard.layout._footer")
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
@include("dashboard.layout.header._base")
{{--Chat in topbar--}}
@include("dashboard.layout.chat.chat")



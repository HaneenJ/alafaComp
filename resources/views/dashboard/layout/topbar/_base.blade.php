<!--begin::Toolbar wrapper-->
<div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Search-->
    <div class="d-flex align-items-stretch ms-1 ms-lg-3">
        <!--layout-partial:layout/search/_base.html-->
        {{--@include("partials.search._base")--}}
    </div>
    <!--end::Search-->
    <!--begin::Activities-->

    <!--end::Quick links-->
    <!--begin::User-->
    <div class="d-flex align-items-center ms-1 ms-lg-3"  >
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
             data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
             <a href="{{ route('auth.logout') }}" class="btn btn-secondary "  >تسجيل خروج</a>

        </div>

        <!--layout-partial:layout/topbar/partials/_user-menu.html-->

        <!--end::Menu wrapper-->
    </div>

</div>
<!--end::Toolbar wrapper-->

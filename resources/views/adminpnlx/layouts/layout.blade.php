<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> ADMIN PANEL</title>
    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link href="{{ config('constants.WEBSITE_CSS_URL') . 'plugins/custom/fullcalendar/fullcalendar.bundle.css' }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ config('constants.WEBSITE_CSS_URL') . 'plugins/global/plugins.bundle.css' }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ config('constants.WEBSITE_CSS_URL') . 'plugins/custom/prismjs/prismjs.bundle.css' }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ config('constants.WEBSITE_CSS_URL') . 'css/style.bundle.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ config('constants.WEBSITE_CSS_URL') . 'css/themes/layout/header/base/light.css' }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ config('constants.WEBSITE_CSS_URL') . 'css/themes/layout/header/menu/light.css' }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ config('constants.WEBSITE_CSS_URL') . 'css/themes/layout/brand/dark.css' }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ config('constants.WEBSITE_CSS_URL') . 'css/themes/layout/aside/dark.css' }}" rel="stylesheet"
        type="text/css" />
    <link rel="shortcut icon" href="{{ config('constants.WEBSITE_CSS_URL') . 'media/logos/favicon.ico' }}" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style type="text/css">
        #kt_datatable_zero_configuration_wrapper #kt_datatable_zero_configuration_filter,
        #kt_datatable_zero_configuration_wrapper #kt_datatable_zero_configuration_paginate {
            float: right;
        }

        div#kt_datatable_zero_configurationss_length {
            float: inline-end;
            margin-left: 10px;
        }

        div#kt_datatable_zero_configurationss_filter {
            float: inline-end;
        }

        .aside-minimize:not(.aside-minimize-hover) .aside .max-h-100px {
            max-height: 30px !important;
        }

        .subheader-enabled:not(.subheader-fixed) .content {
            padding-top: 15px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .5)
        }

        .modal-content {
            background: #fff;
            margin: 10% auto;
            padding: 20px;
            border-radius: 5px;
            width: 400px;
            max-width: 90%;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .3)
        }

        .close {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 28px;
            font-weight: 700;
            color: #aaa;
            cursor: pointer
        }

        .close:hover {
            color: #000
        }

        .swal2-icon {
            margin: 1.25em auto !important;
        }

        .subheader {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: ">";
        }

        .subheader-enabled:not(.subheader-fixed) .subheader.subheader-solid {
            margin-bottom: 0px;
        }
    </style>

</head>

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed  d-print-none">
        <a href="{{ Route('Admin.Dashboard') }}">
            <!-- <img src="{{url('public/admin/image/ckmgrouplogo.png')}}" class="max-h-50px" alt="CKM GROUP" /> -->
        </a>
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>

            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                </span>
            </button>
        </div>
    </div>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto  d-print-none" id="kt_aside">
                <div class="brand flex-column-auto" id="kt_brand" style="min-height: 60px;">
                    <a class="text-center text-white" href="{{ Route('Admin.Dashboard') }}" class="brand-logo"
                        style="font-size: 17px;width: 100%;letter-spacing: 8px;">
                        <img src="{{ URL('/public/front/images/TSH-WHITE-1.png') }}" class="max-h-70px" alt=""
                            style="" />
                    </a>
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">

                        </span>
                    </button>
                </div>

                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
                        data-menu-dropdown-timeout="500">
                        @include('adminpnlx.layouts.sidebar')
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div id="kt_header" class="header header-fixed  d-print-none">
                    @include('adminpnlx.layouts.header')
                </div>

                @yield('content')

                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column  d-print-none" id="kt_footer">
                    @include('adminpnlx.layouts.footer')
                </div>
            </div>
        </div>
    </div>
    <!--end::Main-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
    </div>
    <!--end::Scrolltop-->

    <script>var HOST_URL = "{{url('/')}}";</script>
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
    <script src="{{ config('constants.WEBSITE_CSS_URL') . 'plugins/global/plugins.bundle.js' }}"></script>
    <script src="{{ config('constants.WEBSITE_CSS_URL') . 'plugins/custom/prismjs/prismjs.bundle.js' }}"></script>
    <script src="{{ config('constants.WEBSITE_CSS_URL') . 'js/scripts.bundle.js' }}"></script>
    <script
        src="{{ config('constants.WEBSITE_CSS_URL') . 'plugins/custom/fullcalendar/fullcalendar.bundle.js' }}"></script>
    <script src="{{ config('constants.WEBSITE_CSS_URL') . 'js/pages/widgets.js' }}"></script>
    <script src="{{ config('constants.WEBSITE_CSS_URL') . 'plugins/custom/datatables/datatables.bundle.js' }}"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script src="{{ config('constants.WEBSITE_CSS_URL') . 'js/pages/crud/forms/widgets/select2.js' }}"></script>

    <script type="text/javascript">
        $('.select2').select2({
            placeholder: 'Please Select'
        });
    </script>
</body>

</html>
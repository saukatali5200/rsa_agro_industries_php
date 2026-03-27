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
        <a href="{{url('admin/dashboard')}}">
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
                    <a class="text-center text-white" href="{{url('admin/dashboard')}}" class="brand-logo"
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
                        <!-- <div class="current_comp_name">
							fsdsdfsd
						</div> -->
                        <ul class="menu-nav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{url('admin/dashboard')}}" class="menu-link">
                                    <span class="svg-icon menu-icon">

                                    </span>
                                    <span class="menu-text">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-item menu-item-submenu " aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">

                                    </span>
                                    <span class="menu-text">User Management</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu" style="display: none; overflow: hidden" kt-hidden-height="80">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">

                                        <li class="menu-item " aria-haspopup="true">
                                            <a href="{{url('admin/group')}}" class="menu-link ">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text" style="">User</span>
                                            </a>
                                        </li>

                                        <li class="menu-item " aria-haspopup="true">
                                            <a href="{{url('admin/group/add')}}" class="menu-link ">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text" style="">Staff</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-item menu-item-submenu " aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">

                                    </span>
                                    <span class="menu-text">Product Management</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu" style="display: none; overflow: hidden" kt-hidden-height="80">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">

                                        <li class="menu-item " aria-haspopup="true">
                                            <a href="{{ Route('Category.index')}}" class="menu-link ">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text" style="">Category</span>
                                            </a>
                                        </li>

                                        <li class="menu-item " aria-haspopup="true">
                                            <a href="{{Route('Product.index')}}" class="menu-link ">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text" style="">Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="menu-item" aria-haspopup="true" style="visibility: hidden;">
                                <a href="javascript:void(0)" class="menu-link">
                                    <span class="svg-icon menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                    fill="#000000"></path>
                                                <path
                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                    fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="menu-text">&nbsp;</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div id="kt_header" class="header header-fixed  d-print-none">
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                                <!--begin::Header Nav-->
                                <h5 class="text-dark font-weight-bold mt-6 mb-2 mr-5"> ADMIN PANEL </h5>
                            </div>
                        </div>
                        <div class="topbar">
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-md-inline mr-1">Hello</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-md-inline mr-3">ad</span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">tet</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">Profile</h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <?php $user = Session::get('admin_userdata');  ?>
                <div class="symbol symbol-100 mr-5">

                    <?php if (isset($user->user_image) && $user->user_image != '') { ?>
                    <div class="symbol-label"
                        style="background-image:url('<?php    echo url('/uploads/employees/') . '/' . $user->user_image;?>')">
                    </div>
                    <?php } else { ?>
                    <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                    <?php }?>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">ali</a>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text text-muted text-hover-primary">test</span>
                            </span>
                        </a>
                        <a href="{{url('/admin/logout')}}"
                            class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Logout</a>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <div class="navi navi-spacer-x-0 p-0">
                <a href="{{url('admin/updateprofile')}}" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-success">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">Profile</div>
                            <div class="text-muted">Account settings and more
                                <span class="label label-light-danger label-inline font-weight-bold">Update</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->

            </div>
            <div class="separator separator-dashed my-7"></div>
            <div>
            </div>
        </div>
    </div>

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
            <!--end::Svg Icon-->
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
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

	<style type="text/css">
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
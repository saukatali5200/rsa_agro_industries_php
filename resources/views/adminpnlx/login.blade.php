<?php
// You can put your nonce_value.
// nonce_value means any random set of characters which helps to send and receive the valid HTTP request
$nonceValue = 'zzBBQ!aGGoeMsdgsdgdos@oQz*E';
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $PageTitle ?></title>
    <meta name="description" content="Datatable HTML table" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{url('admin/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('admin/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('admin/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('admin/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('admin/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('admin/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('admin/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{url('admin/media/logos/favicon.ico')}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background: #fff;
        }

        .custom-login .login-form {
            font-family: 'Titillium Web', sans-serif;
            flex: 25%;
            align-items: center;
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .custom-login h3 {
            color: #2d385e;
            font-weight: 700;
            font-size: 24px;
        }

        .custom-login p {
            font-size: 16px;
            font-weight: 400;
            color: #44525f;
        }

        .custom-login label {
            color: #000;
        }

        .three-logo {
            flex: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .three-logo::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(45, 56, 94, 0.9);
            left: 0%;
            top: 0;
            z-index: 1;
        }

        .three-logo .lg-imgs {
            position: relative;
            z-index: 2;
            border-radius: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .three-logo .lg-imgs img {
            object-fit: contain;
            max-width: 800px;
        }

        .custom-form-control {
            background-color: #fff;
            color: #333333;
            font-size: 18px;
            height: 50px;
            margin-bottom: 20px;
            /* padding: 5px 5px; */
            border-radius: 3px;
            box-shadow: 0 3px 6px 0 rgb(0 0 0 / 10%), 0 0 2px 0 rgb(0 0 0 / 10%);
            border: solid 1px #bcc2ce;
            outline: none;
            width: 100%;
        }

        .custom-btn {
            background-color: #4f77ff;
            border-color: #4f77ff;
            display: block;
            width: 100%;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px;
            color: #fff;
        }

        .login-signin.new-logn-page {
            width: 40%;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            /* max-width: 640px; */
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        .login-signin.new-logn-page .tp-loog {
            display: block !important;
            background: linear-gradient(21deg, #D2BA9B 0%, #ffefdb 100%);
            padding: 20px;
        }

        .row.align-items-center {
                padding: 10px;
            }

        .login-signin.new-logn-page .tp-loog a {
            width: 290px;
            height: 110px;
            display: inline-block;
            padding: 15px;
            background: #3e3e3e6b;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 51px -4px rgb(0 0 0 / 15%);
            -moz-box-shadow: 0px 0px 51px -4px rgb(0 0 0 / 15%);
            box-shadow: 0px 0px 51px -4px rgb(0 0 0 / 15%);
            position: relative;
        }

        .login-signin.new-logn-page .tp-loog a img {
            max-height: 100% !important;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .login-signin.new-logn-page h3 {
            margin: 10px;
        }

        .login-signin.new-logn-page form {
            padding: 15px;
        }

        .login-signin.new-logn-page form input {
            line-height: 50px;
            border: none;
            background: #fff;
            box-shadow: 0 0 5px #ccc;
            font-size: 16px;
            font-weight: 600;
            outline: none;
            border-radius: 25px;
            padding-left: 10px;
        }

        .login-signin.new-logn-page form input.custom-btn {
            background: #d2ba9b;
            padding: 0;
            font-size: 18px;
            transition: 0.3s all ease;
        }

        .login-signin.new-logn-page form input.custom-btn:hover {
            background: #977f60;
        }

        span.invalid-feedback {
            color: #ef4f4f;
        }

        @media(max-width: 768px) {
            .d-flex {
                display: block !important;
            }

            .custom-login .login-form {
                flex: 100%;
            }
        }
    </style>
</head>
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
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
                timer: 2000
            });
        </script>
    @endif
    <div class="d-flex flex-column flex-root">
        <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="custom-login d-flex bgi-size-cover bgi-no-repeat flex-row-fluid">
                <div class="login-form text-center p-7 position-relative overflow-hidden"
                    style="background: url({{url('public/admin/media/bg/bgd.png')}}) repeat;">
                    <div class="login-signin new-logn-page">
                        <div class="mb-10">
                            <div class="tp-loog d-flex flex-center">
                                <a href="#">
                                    <img src="{{ URL('/public/front/images/TSH-WHITE-1.png') }}" class="max-h-200px"
                                        alt="" />
                                </a>
                            </div>
                            <h3>Login to your account</h3>
                        </div>
                        <form action="" method="post" id="form1">
                            <div class="row align-items-center">
                                @csrf()
                                <div class="col-lg-12 col-xl-12">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 my-2">
                                            <input type="email" name="username"
                                                class="custom-form-control @error('username') is-invalid @enderror"
                                                value="{{ old('username') }}" placeholder="Email Address">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <input type="password" name="password" id="password"
                                                class="custom-form-control @error('username') is-invalid @enderror"
                                                placeholder="Enter Password" minlength="6">
                                                <span onclick="togglePassword()" 
                                                    style="position:absolute; right:40px; top:75%; transform:translateY(-50%); cursor:pointer;">
                                                    <i class="fas fa-eye"></i>
                                                </span>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-12 mt-5">
                                    <input type="submit" class="custom-btn" name="Login" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>var HOST_URL = "{{url('/')}}";</script>
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
    <script src="{{url('public/admin/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{url('public/admin/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
    <script src="{{url('public/admin/js/scripts.bundle.js')}}"></script>
    <script src="{{url('public/admin/js/pages/crud/ktdatatable/base/html-table.js')}}"></script>
    <script src="{{url('/')}}/public/admin/js/crypto-js.min.js"></script>
    <script src="{{url('/')}}/public/admin/js/Encryption.js"></script>
    <script>
        function togglePassword() {
            var password = document.getElementById("password");
            var icon = document.querySelector("#password + span i");

            if (password.type === "password") {
                password.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                password.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }

        function checkNumeric(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
        $(document).ready(function () {
            $("#form1").submit(function (event) {
                var email = $("#username").val();
                var password = $("#password").val();
                var nonceValue = "<?php echo $nonceValue; ?>";
                let encryption = new Encryption();
                var emailEncrypted = encryption.encrypt(email, nonceValue);
                var passwordEncrypted = encryption.encrypt(password, nonceValue);
            });
        });
    </script>
</body>

</html>
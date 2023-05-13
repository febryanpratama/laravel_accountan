<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamslms.dreamguystech.com/laravel/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 17:00:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams LMS</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}assets/img/favicon.svg">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/feather.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.theme.default.min.css">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/slick/slick-theme.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/dropzone/dropzone.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
</head>

<body>

    <div class="main-wrapper log-wrap">
        <div class="row">

            <div class="col-md-6 login-bg">
                <div class="owl-carousel login-slide owl-theme">
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="{{ asset('') }}assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Masuk ke <br>Dashboard.</h2>
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="{{ asset('') }}assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Masuk ke <br>Dashboard.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="{{ asset('') }}assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Masuk ke <br>Dashboard.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 login-wrap-bg">

                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="w-100">
                            <div class="img-logo">
                                {{-- <img src="{{ asset('') }}assets/img/logo.svg" class="img-fluid" alt="Logo"> --}}
                                <span><h2 style="color: #ff875a">LOGIN</h2></span>
                                <div class="back-home">
                                    <a href="{{ url('/') }}">Kembali ke Halaman Utama</a>
                                </div>
                            </div>
                            <h1>Login ke Akun Anda</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                    {{-- <input type="email" class="form-control" placeholder="Enter your email address"> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                                        
                                        <span class="feather-eye toggle-password"></span>
                                    </div>
                                </div>
                                <div class="forgot">
                                    <span><a class="forgot-link" href="forgot-password.html">Lupa Password
                                            ?</a></span>
                                </div>
                                <div class="remember-me">
                                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                        <input type="checkbox" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <script src="{{ asset('') }}assets/js/ckeditor.js"></script>

    <script src="{{ asset('') }}assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <script src="{{ asset('') }}assets/plugins/countup/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/countup/jquery.counterup.min.js"></script>

    <script src="{{ asset('') }}assets/js/owl.carousel.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/slick/slick.js"></script>

    <script src="{{ asset('') }}assets/plugins/feather/feather.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="{{ asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <script src="{{ asset('') }}assets/js/circle-progress.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/dropzone/dropzone.min.js"></script>

    <script src="{{ asset('') }}assets/js/validation.js"></script>

    <script src="{{ asset('') }}assets/plugins/aos/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="{{ asset('') }}assets/js/script.js"></script>
    <script>
        $(document).ready(function(){
            @if (session('success'))
            Swal.fire(
                'Great !',
                '{{ session("success") }}',
                'success'
            )
            // swal("Great !", "{{ session('success') }}", "success");
            @endif ()
            
            @if (session('errors'))
            Swal.fire(
                'Oh No !',
                '{{ session("errors") }}',
                'error'
            )
            // swal("Oh No !", "{{ session('errors') }}", "errors");
            @endif ()
        })
    </script>
</body>

<!-- Mirrored from dreamslms.dreamguystech.com/laravel/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 17:00:43 GMT -->

</html>
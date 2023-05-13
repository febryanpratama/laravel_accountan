<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamslms.dreamguystech.com/laravel/public/dashboard-instructor by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 17:01:16 GMT -->
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

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/slick/slick-theme.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/dropzone/dropzone.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">

    <style>
        .hide {
            display: none
        }
    </style>
</head>

<body>

    <div class="main-wrapper">

        @include('layouts.header')


        
        <div class="page-content instructor-page-content">
            <div class="container">
                <div class="row">
                    
                    @include('layouts.sidebar')
                    
                    @yield('content')

                </div>
            </div>
        </div>



        @include('layouts.header')
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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

    <script src="{{ asset('') }}assets/js/script.js"></script>

    @yield('script')
</body>

<!-- Mirrored from dreamslms.dreamguystech.com/laravel/public/dashboard-instructor by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 17:01:16 GMT -->

</html>
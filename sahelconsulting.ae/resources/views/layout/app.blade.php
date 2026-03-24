<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>COGIMEX-SA</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{URL::to('assets/img/favicon.png')}}" rel="icon">
        <link href="{{URL::to('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{URL::to('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::to('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{URL::to('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{URL::to('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{URL::to('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{URL::to('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{URL::to('assets/css/main.css')}}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: UpConstruction
        * Updated: Jan 09 2024 with Bootstrap v5.3.2
        * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
      </head>

<body>

    <div id="app">

        @include('layout/navbar')


        <main class="py-0 @yield('mode','')" >
            @yield('content')
        </main>
        @include('layout/footer')
    </div>





<!-- Vendor JS Files -->
<script src="{{URL::to('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::to('assets/vendor/aos/aos.js')}}"></script>
<script src="{{URL::to('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{URL::to('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::to('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{URL::to('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{URL::to('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{URL::to('assets/js/main.js')}}"></script>



</body>
</html>

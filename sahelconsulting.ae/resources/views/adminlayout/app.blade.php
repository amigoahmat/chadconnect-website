
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard-Cogimex</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::to('admin/assets/img/favicon.png')}}" rel="icon">
  <link href="{{URL::to('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{URL::to('admin/https://fonts.gstatic.com')}}" rel="preconnect">
  <link href="{{URL::to('admin/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i ')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::to('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::to('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{URL::to('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{URL::to('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{URL::to('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::to('admin/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

    <div id="app">

        @include('adminlayout/navbar')


        <main class="py-0 @yield('mode','')" >
            @yield('content')
        </main>
        @include('adminlayout/footer')
    </div>





 <!-- Vendor JS Files -->
 <script src="{{URL::to('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
 <script src="{{URL::to('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{URL::to('admin/assets/vendor/chart.js/chart.umd.js')}}"></script>
 <script src="{{URL::to('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
 <script src="{{URL::to('admin/assets/vendor/quill/quill.min.js')}}"></script>
 <script src="{{URL::to('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
 <script src="{{URL::to('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
 <script src="{{URL::to('admin/assets/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
 <script src="{{URL::to('admin/assets/js/main.js')}}"></script>




</body>
</html>

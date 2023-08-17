<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{ $title }} | BPSDMP Kominfo Surabaya</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/home/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('/home/assets/css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    @include('partials.header')
    <!-- End Header -->

    @yield('content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('partials.footer')
    <!-- End Footer -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('/home/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/home/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/home/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/home/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/home/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/home/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/home/assets/js/main.js') }}"></script>
  </body>
</html>

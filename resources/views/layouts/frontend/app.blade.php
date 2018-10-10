<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} || @yield('title')</title>



    {{-- Thsi si new link --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('asset/frontend/img/berg-logo.jpg') }}" rel="shortcut icon" type="image/png">
    <!-- Loader-->
    <link href="{{ asset('asset/frontend/css/loaders.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('asset/frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- font-awesome-css -->
    {{-- <link rel="stylesheet" href="{{ asset('asset/frontend/css/fontawesom.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/font-awesome.min.css') }}"> --}}
    <!-- Normalize-css -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/normalize.min.css') }}">
    <!-- for Navbar scroll -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/navbar-fixed.css') }}">
    <!-- CSS for Testimonial slider -->
  <link rel="stylesheet" href="{{ asset('asset/frontend/css/flickity.min.css') }}">
    <!-- UI-KIT Stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/uikit.min.css') }}">
    <!-- For Animation -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/animate.min.css') }}">
    <!-- Main-css -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/style.css') }}">
     <!--Toastr js-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('css')
</head>
<body>
@include('layouts.frontend.includes.header')

@yield('content')

@include('layouts.frontend.includes.footer')

<!--Starts Return to Top -->
<a href="#" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
<!--End of Return to Top -->

  <!-- Loader-->
  <script src="{{ asset('asset/frontend/js/loaders.css.js') }}"></script>
  <!--jquery file-->
  <script src="{{ asset('asset/frontend/js/jquery.min.js') }}"></script>
  <!--Popper JS-->
  <script src="{{ asset('asset/frontend/js/popper.min.js') }}"></script>
  <!--Bootstrap JS file-->
  <script src="{{ asset('asset/frontend/js/bootstrap.min.js') }}"></script>
  <!--for Navbar auto scroll-->
  <script src="{{ asset('asset/frontend/js/navbar-fixed.js') }}"></script>
  <!--for Navbar after effects-->
  <script src="{{ asset('asset/frontend/js/uikit.min.js') }}"></script>
    <!-- JS for Testimonial slider -->
  <script src="{{ asset('asset/frontend/js/flickity.min.js') }}"></script>
  <!--for WOW JS effects-->
  <script src="{{ asset('asset/frontend/js/wow.min.js') }}"></script>
  <!--main js file-->
  <script src="{{ asset('asset/frontend/js/index.js') }}"></script>
  <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<script type="text/javascript">
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.warning('{{ $error }}', 'Error', {
        closeButton: true,
        progressbar: true,
    });
    @endforeach
    @endif
</script>
@stack('script')
</body>
</html>

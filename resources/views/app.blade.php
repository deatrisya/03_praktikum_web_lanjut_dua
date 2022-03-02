<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>

  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/templatemo-style.css')}}" rel="stylesheet">
  <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />

  </head>
  <body>
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    @include('navbar')

    @yield('content')

    @include('footer')

   <!-- JS -->
   <script type="text/javascript" src="{{asset('js/jquery-1.11.2.min.js')}}"></script>      <!-- jQuery -->
   <script type="text/javascript" src="{{asset('js/templatemo-script.js')}}"></script>      <!-- Templatemo Script -->

   @yield('js')

 </body>
 </html>

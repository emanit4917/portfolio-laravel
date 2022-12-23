<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Portfolio</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Slick -->
  <link rel="stylesheet" href="{{asset('frontend')}}/plugins/slick/slick.css">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="{{asset('frontend')}}/plugins/font-awesome/fontawesome.min.css">
  <link rel="stylesheet" href="{{asset('frontend')}}/plugins/font-awesome/brands.css">
  <link rel="stylesheet" href="{{asset('frontend')}}/plugins/font-awesome/solid.css">

  <!-- aos -->
  <link rel="stylesheet" href="{{asset('frontend')}}/plugins/aos/aos.css">

  <!-- Main Stylesheet -->
  <link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon.png" type="image/x-icon">


</head>

<body>

  @include('frontend.layouts.header')
    @yield('content')
  @include('frontend.layouts.footer')

<!--================== Footer Section End ==================-->
<!-- jQuery -->
<script src="{{asset('frontend/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/')}}/plugins/bootstrap/bootstrap.bundle.min.js"></script>
<!-- slick-slider-->
<script src="{{asset('frontend/')}}/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="{{asset('frontend/')}}/plugins/aos/aos.js"></script>
<!-- isotope -->
<script src="{{asset('frontend/')}}/plugins/shuffle/shuffle.js"></script>
<!-- Main Script -->
<script src="{{asset('frontend/')}}/js/script.js"></script>

</body>

</html>
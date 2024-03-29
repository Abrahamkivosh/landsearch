<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Land Search</title>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" >
  <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
  <link href="{{ asset('asset/css/prettyPhoto.css" rel="stylesheet') }}">
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" />

</head>

<body>
  <header>

  @include('includes/clantnavbar' )

  </header>


  @yield('top')

  {{--  @includeIf('includes.homeslide', ['some' => 'data'])  --}}
  <!--/#main-slider-->


  @yield('content')

  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy; Thika Land Ministry. All Rights Reserved.
            >
        </div>
      </div>

      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery-migrate.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.isotope.min.js') }}"></script>
  <script src="{{ asset('asset/js/wow.min.js') }}"></script>
  <script src="{{ asset('asset/js/functions.js') }}"></script>

</body>

</html>

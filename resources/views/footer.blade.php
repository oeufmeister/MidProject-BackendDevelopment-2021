<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="font-size: 15px">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    
    <!-- Right -->
  </section>
 

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>About Us
          </h6>
          <p>
            We are a company specializing in helping people study efficiently. Using courses which are easy to understand for begginers and intermediates alike. Our vision includes : It's about drive, it's about power.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Social Media
          </h6>
          <p>
            <a href="https://www.youtube.com/watch?v=iik25wqIuFo" class="text-reset">Youtube</a>
          </p>
          <p>
            <a href="https://www.youtube.com/watch?v=IqgERtJEgu8" class="text-reset">Twitter</a>
          </p>
          <p>
            <a href="https://www.youtube.com/watch?v=Tc8iu0XFUQc" class="text-reset">Instagram</a>
          </p>
          <p>
            <a href="https://github.com/AceLewis/my_first_calculator.py/blob/master/my_first_calculator.py" class="text-reset">GitHub</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
       
        <!-- Grid column -->

        <!-- Grid column -->
        
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://www.youtube.com/watch?v=bGzcsJH9Quk">nepucchi</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
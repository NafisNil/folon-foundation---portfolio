<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HELPZ - Free Charity Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('frontend') }}/lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="{{ asset('frontend') }}/lib/animate/animate.min.css" rel="stylesheet">
        <link href="{{ asset('frontend') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <!-- Template Stylesheet -->
        <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">
    </head>

    <body>


        @include('frontend.layouts.header')
        @yield('content')


        <!-- Footer Start -->
       @include('frontend.layouts.footer')
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend') }}/lib/easing/easing.min.js"></script>
        <script src="{{ asset('frontend') }}/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="{{ asset('frontend') }}/lib/waypoints/waypoints.min.js"></script>
        <script src="{{ asset('frontend') }}/lib/counterup/counterup.min.js"></script>
        <script src="{{ asset('frontend') }}/lib/parallax/parallax.min.js"></script>



        <!-- Template Javascript -->
        <script src="{{ asset('frontend') }}/js/main.js"></script>
    </body>
</html>

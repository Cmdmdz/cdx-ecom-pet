<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amber - Pet Care Bootstrap 5 Template</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Vendor CSS (Icon Font) -->


    <link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/themify-icons-min.css" />



    <!-- Plugins CSS (All Plugins Files) -->



    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css" />



    <!-- Main Style CSS -->


    <link rel="stylesheet" href="assets/css/style.css" />



    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <!--
<link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">
-->


</head>

<body>

    @include('layouts.header')

    <div>

        <section class="login">
            @yield('login')
        </section>

        <section class="login">
            @yield('register')
        </section>

        <section class="content">
            @yield('content')
        </section>
    </div>

    @include('layouts.footer')

    <!-- Vendor JS -->

    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Plugins JS -->


    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdown.min.js"></script>
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    -->

    <!--Main JS-->
    <script src="assets/js/main.js"></script>
</body>

</html>

<!DOCTYPE html>

<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Tainara Reis</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        
        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <!--<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        {{Html::style('../vendor/simple-line-icons/css/simple-line-icons.css')}}
        {{Html::style('../vendor/bootstrap/css/bootstrap.min.css')}}
        
        <!-- PAGE LEVEL PLUGIN STYLES -->
        <!--<link href="../public/css/animate.css" rel="stylesheet">-->
        {{Html::style('../css/animate.css')}}
        <!-- THEME STYLES -->
        <!--<link href="../public/css/layout.min.css" rel="stylesheet" type="text/css"/>-->
        {{Html::style('../css/layout.min.css')}}
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">
        
        @include ('layouts.header')

        @yield('content')

        @include ('layouts.footer')
        
    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="../vendor/jquery.min.js" type="text/javascript"></script>
    <script src="../vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="../vendor/jquery.easing.js" type="text/javascript"></script>
    <script src="../vendor/jquery.back-to-top.js" type="text/javascript"></script>
    <script src="../vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="../vendor/jquery.wow.min.js" type="text/javascript"></script>
    <script src="../vendor/jquery.parallax.min.js" type="text/javascript"></script>
    <script src="../vendor/jquery.appear.js" type="text/javascript"></script>
    <script src="../vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="../vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="../js/layout.min.js" type="text/javascript"></script>
    <script src="../js/components/progress-bar.min.js" type="text/javascript"></script>
    <script src="../js/components/masonry.min.js" type="text/javascript"></script>
    <script src="../js/components/wow.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
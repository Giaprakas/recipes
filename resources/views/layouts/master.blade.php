<!DOCTYPE html>
<html>

    <head>
        <title>Clip-One - Responsive Admin Template</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="Responsive Admin Template build with Twitter Bootstrap and jQuery" name="description" />
        <meta content="ClipTheme" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />
        <link type="text/css" rel="stylesheet" href="/assets/components/bootstrap/dist/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="/assets/components/font-awesome/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="/assets/fonts/clip-font.min.css" />
        <link type="text/css" rel="stylesheet" href="/assets/components/iCheck/skins/all.css" />
        <link type="text/css" rel="stylesheet" href="/assets/components/perfect-scrollbar/css/perfect-scrollbar.min.css" />
        <link type="text/css" rel="stylesheet" href="/assets/components/sweetalert/dist/sweetalert.css" />
        <link type="text/css" rel="stylesheet" href="/assets/css/main.min.css" />
        <link type="text/css" rel="stylesheet" href="/assets/css/main-responsive.min.css" />
        <link type="text/css" rel="stylesheet" media="print" href="public/assets/css/print.min.css" />
        <link type="text/css" rel="stylesheet" id="skin_color" href="public/assets/css/theme/light.min.css" />
        <!-- end: MAIN CSS --> 
    </head>
    
    <body>

        <header>
            @include('layouts.partials._header')
        </header>    
    
        <main>
            @include('layouts.partials._main')
        </main>

        <footer class="mt-auto">
            @include('layouts.partials._footer')
        </footer>
      

        <!-- start: MAIN JAVASCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <!--[if lt IE 9]>
            <script src="assets/components/respond/dest/respond.min.js"></script>
            <script src="assets/components/Flot/excanvas.min.js"></script>
            <script src="assets/components/jquery-1.x/dist/jquery.min.js"></script>
            <![endif]-->
        <!--[if gte IE 9]><!-->
        <script type="text/javascript" src="assets/componentsjquery/dist/jquery.min.js"></script>
        <!--<![endif]-->
        <script type="text/javascript" src="public/assets/components/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="public/assets/components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="public/assets/components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="public/assets/components/blockUI/jquery.blockUI.js"></script>
        <script type="text/javascript" src="public/assets/components/iCheck/icheck.min.js"></script>
        <script type="text/javascript" src="public/assets/components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
        <script type="text/javascript" src="public/assets/components/jquery.cookie/jquery.cookie.js"></script>
        <script type="text/javascript" src="public/assets/components/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="public/assets/js/min/main.min.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
    </body>

</html>

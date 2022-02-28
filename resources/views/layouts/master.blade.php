<!DOCTYPE html>
<html>

    <head>
        <title>Clip-One</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <mainmeta>
            <!-- start: META -->
            <meta charset="utf-8" />
            <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <meta content="Responsive Admin Template build with Twitter Bootstrap and jQuery" name="description" />
            <meta content="ClipTheme" name="author" />
            <!-- end: META -->
        </mainmeta>
        <maincss>
            <!-- start: MAIN CSS -->
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/components/select2/dist/css/select2.min.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/components/select2/dist/css/select2.css') }}" />
            <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/components/bootstrap/dist/css/bootstrap.min.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/components/font-awesome/css/font-awesome.min.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/fonts/clip-font.min.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/components/iCheck/skins/all.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/components/sweetalert/dist/sweetalert.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main-responsive.min.css') }}" />
            <link type="text/css" rel="stylesheet" media="print" href="{{ asset('assets/css/print.min.css') }}" />
            <link type="text/css" rel="stylesheet" id="skin_color" href="{{ asset('assets/css/theme/light.min.css') }}" />
            <!-- end: MAIN CSS --> 
        </maincss>
    </head>
    
    <body class="page-full-width">  
        <header>
            @include('layouts.partials._header')
        </header>
        
        <main>
            @include('layouts.partials._main')
        </main>

        <footer>
            @include('layouts.partials._footer')
        </footer>

        @include('layouts.extras.modals')

        <mainscripts>
            <!-- start: MAIN JAVASCRIPTS -->
            <!--[if gte IE 9]><!-->
            <script type="text/javascript" src="{{ asset('assets/components/jquery/dist/jquery.min.js') }}"></script>
            <!--<![endif]-->
            <script type="text/javascript" src="{{ asset('assets/js/js-scripts.js') }}"></script>
            {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
            <script type="text/javascript" src="{{ asset('assets/components/jquery-ui/jquery-ui.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/components/blockUI/jquery.blockUI.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/components/iCheck/icheck.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/components/jquery.cookie/jquery.cookie.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/components/sweetalert/dist/sweetalert.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/min/main.min.js') }}"></script>
            
            <script src="{{ asset('assets/components/moment/min/moment.min.js') }}"></script>
            <script src="{{ asset('assets/components/bootstrap-maxlength/src/bootstrap-maxlength.js') }}"></script>
            <script src="{{ asset('assets/components/autosize/dist/autosize.min.js') }}"></script>
            <script src="{{ asset('assets/components/select2/dist/js/select2.min.js') }}"></script>
            <script src="{{ asset('assets/components/jquery.maskedinput/dist/jquery.maskedinput.min.js') }}"></script>
            <script src="{{ asset('assets/components/jquery-maskmoney/dist/jquery.maskMoney.min.js') }}"></script>
            <script src="{{ asset('assets/components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset('assets/components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
            <script src="{{ asset('assets/components/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
            <script src="{{ asset('assets/components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
            <script src="{{ asset('assets/components/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
            <script src="{{ asset('assets/components/summernote/dist/summernote.min.js') }}"></script>
            <script src="{{ asset('assets/components/ckeditor/ckeditor.js') }}"></script>
            <script src="{{ asset('assets/components/ckeditor/adapters/jquery.js') }}"></script>
            <script src="{{ asset('assets/components/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') }}"></script>
            <script src="{{ asset('assets/components/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
            <script src="{{ asset('assets/js/min/form-elements.min.js') }}"></script>
            <!-- end: MAIN JAVASCRIPTS -->
            <!-- Latest compiled and minified JavaScript -->
            <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> -->
        </mainscripts>
        <script>
            jQuery(document).ready(function() {
                Main.init();
                FormElements.init();
            });
        </script>
    </body>
</html>
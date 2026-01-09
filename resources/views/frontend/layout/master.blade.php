<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
    <head>

        <!-- ** Basic Page Needs ** -->
        <meta charset="utf-8">
        <title>@yield('title', 'Vex-Template Copy')</title>

        <!-- ** Mobile Specific Metas ** -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Vex HTML Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
        <meta name="author" content="Themefisher">
        <meta name="generator" content="Themefisher Vex HTML Template v1.0">
        
        <!-- theme meta -->
        <meta name="theme-name" content="vex" />
        
        <!-- ** Plugins Needed for the Project ** -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid&#43;Serif:400%7cJosefin&#43;Sans:300,400,600,700 ">
        <!-- <link rel="stylesheet" href="vextemp/plugins/bootstrap/bootstrap.min.css ">
        <link rel="stylesheet" href="vextemp/plugins/themefisher-font/themefisher-font.min.css ">
        <link rel="stylesheet" href="vextemp/plugins/slick/slick.min.css "> -->

        <link rel="stylesheet" href="{{ asset('vextemp/plugins/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vextemp/plugins/themefisher-font/themefisher-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vextemp/plugins/slick/slick.min.css') }}">

        
        <!-- Stylesheets -->
        <link href="{{asset('vextemp/css/style.css')}}" rel="stylesheet">
        
        <!--Favicon-->
        <link rel="icon" href="{{asset('vextemp/images/favicon.png')}}" type="image/x-icon"> 
    </head>
    <body id="body">
            @include('frontend.layout.header')
        
        <!-- preloader start -->
        <div class="preloader"></div>
        <!-- preloader end -->

        
        @yield('content')

        <!-- <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick/slick.min.js"></script>
        <script src="js/script.js"></script> -->
        <script src="{{ asset('vextemp/plugins/jquery/jquery.js') }}"></script>
        <script src="{{ asset('vextemp/plugins/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vextemp/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('vextemp/js/script.js') }}"></script>

        @include('frontend.layout.footer')
    </body>
</html>


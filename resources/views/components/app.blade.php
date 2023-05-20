<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? '' }}</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta
        content="Passenger"
        name="keywords"
    />
    <script type="applijewelleryion/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }

    </script>
    <link href="{{asset('assets/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:400,700,600"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="//fonts.googleapis.com/css?family=Oswald"
        rel="stylesheet"
        type="text/css"
    />
    <link href="{{asset('assets/frontend/css/font-awesome.css')}}" rel="stylesheet"/>
    <!-- Custom Theme files -->
    <script src="{{asset('assets/frontend/js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!--animate-->
    <link href="{{asset('assets/frontend/css/animate.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
</head>

<body>
<x-frontend.includes.header/>

{{$content}}

<x-frontend.includes.footer/>

<x-frontend.includes.copyright/>

<x-frontend.includes.signup/>

<x-frontend.includes.signin/>

<x-frontend.includes.contact-us/>
</body>
</html>

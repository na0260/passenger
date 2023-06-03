<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/backend/images/favicon-32x32.png')}}" type="image/png"/>
    <!--plugins-->
    <link href="{{asset('assets/backend/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/backend/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/backend/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/backend/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{asset('assets/backend/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/backend/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/backend/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('assets/backend/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('assets/backend/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/dark-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/semi-dark.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/header-colors.css')}}"/>
    <title>{{ $title ?? '' }}</title>
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <x-backend.includes.sidebar/>

    <x-backend.includes.header/>

    {{$content}}

    <x-backend.includes.footer/>
</div>
<!--end wrapper-->
<x-backend.includes.search/>

<x-backend.includes.switcher/>
<!-- Bootstrap JS -->
<script src="{{asset('assets/backend/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('assets/backend/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/backend/plugins/chartjs/js/chart.js')}}"></script>
<script src="{{asset('assets/backend/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('assets/backend/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/morris/js/morris.js')}}"></script>
<script src="{{asset('assets/backend/js/index2.js')}}"></script>
<!--app JS-->
<script src="{{asset('assets/backend/js/app.js')}}"></script>
<script src="{{asset('assets/backend/js/script.js')}}"></script>
</body>

</html>

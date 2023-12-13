<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TutorSync</title>
    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet"/>
    {{-- <script src="{{ asset('js/pace.min.js') }}"></script> --}}
    <!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!--Full Calendar Css-->
    <link href="{{ asset('plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{ asset('plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ asset('css/sidebar-menu.css') }}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ asset('css/app-style.css') }}" rel="stylesheet"/>
</head>
<body class="bg-theme bg-theme1">
    <div>
            @yield('calendar')
    </div>
</body>
</html>

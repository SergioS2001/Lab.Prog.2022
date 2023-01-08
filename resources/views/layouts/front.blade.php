<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link rel="stylesheet" href="htpps://maxcdn.bootstrap.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="{{ asset('frontend/css/costum.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Google Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <style>
        a {
            text-decoration: nome !important;
            color:#000 !important;
        }
    </style>

</head>

<body> <!-- MELHORAR OS REDIRECIONAMENTOS DE CADA UMA DAS PARTES DO BOOTSTRAP
            INCLUIR A PARTE DO ADMINISTRADOR + CONTAINER (?) -->

    @include('layouts.inc.frontnavbar')

    <div class="content">
        @yield('content')
    </div>

    <script src="{{ asset('frontend/js/jquery-3.6.3.min.js')}}"> </script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"> </script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"> </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
    @endif
    @yield('scripts')

</body>



@vite(['resources/sass/app.scss', 'resources/js/app.js'])


</html>
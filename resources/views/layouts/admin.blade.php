<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link rel="stylesheet" href="htpps://maxcdn.bootstrap.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/costum.css') }}" rel="stylesheet">

</head>

<body> <!-- MELHORAR OS REDIRECIONAMENTOS DE CADA UMA DAS PARTES DO BOOTSTRAP
            INCLUIR A PARTE DO ADMINISTRADOR + CONTAINER (?) -->

    <div class="g-sidenav-show">
        @include('layouts.inc.sidebar')

        <div class="main-content">
            @include('layouts.inc.adminnav')
        </div>

        <div class="container-fluid">
            @yield('container-fluid')
        </div>

        @include('layouts.inc.adminfooter')
    </div>



    <script src="{{ asset('admin/js/popper.min.js') }}" defer> </script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer> </script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer> </script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer> </script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}" defer> </script>

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
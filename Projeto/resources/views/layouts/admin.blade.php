<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Projeto</title>

    <!-- plugins:css -->        
  <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href= "{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png')}}" />

   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
          @livewireStyles
          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
</head>

<body>
        @livewireScripts


    <?php
      print "admin teste"
    ?>

        <!-- container-scroller -->
        <div class="container-scroller">
            @include('include.admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('include.admin.sidebar')
             <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')

            </div>
             </div>


        </div>
             </div>

      

  <!-- plugins:js -->
  <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>

  
  <script src=" {{asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src=" {{asset('admin/ vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}    "></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=" {{asset('admin/js/off-canvas.js')}}"></script>
  <script src=" {{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src=" {{asset('admin/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=" {{asset('admin/js/dashboard.js')}}"></script>
  <script src=" {{asset('admin/js/data-table.js')}}"></script>
  <script src=" {{asset('admin/js/jquery.dataTables.js')}}"></script>
  <script src=" {{asset('admin/js/dataTables.bootstrap4.js')}}"></script>

</body>
</html>
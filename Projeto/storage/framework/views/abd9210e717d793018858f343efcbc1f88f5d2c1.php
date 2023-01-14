<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Projeto')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
          <?php echo \Livewire\Livewire::styles(); ?>

      
          <!-- Scripts -->
          <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>

<body>
  <!-- Nav Bar com Logo tipo e butoes exemplo -->
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="Logo" width="40" height="40" class="rounded float-start">
        Nome Do Site
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!--
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        -->
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <?php if(auth()->guard()->guest()): ?>
          <?php if(Route::has('login')): ?>
          <li class="nav-item list-unstyled">
            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
          </li>
          <?php endif; ?>

          <?php if(Route::has('register')): ?>
          <li class="nav-item list-unstyled">
            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
          </li>
          <?php endif; ?>
          <?php else: ?>
          <li class="nav-item dropdown list-unstyled">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <?php echo e(Auth::user()->name); ?>

            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

              </a>

              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
              </form>
            </div>
          </li>
          <?php endif; ?>
          </ul>
      </div>
    </div>
  </nav>

  <main class="py-4">
    <?php echo $__env->yieldContent('content'); ?>
  </main>
  </div>

  <!-- teste de php-->
  <h1 align="center">
    <?php
    print "Hello, world!\nAqui fica o teste do nosso home screen\n";
    ?>
  </h1>

  <button type="button" class="btn btn-primary" onclick="window.location='<?php echo e(url('')); ?>'">Voltar a outra pagina</button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\Users\sergi\Documents\GitHub\Lab.Prog.2022\Projeto\resources\views/home/homescreen.blade.php ENDPATH**/ ?>
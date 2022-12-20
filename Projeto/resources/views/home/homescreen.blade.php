<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>

    .nav-link {
        margin-left: 30px;
    }

    </style>

</head>
  <body>
    <!-- Nav Bar com Logo tipo e butoes exemplo -->   
        <nav class="navbar navbar-expand-lg bg-light">
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <!--
        <button class="btn btn-outline-success" type="submit" href="http://localhost:8000/login">Log In</button>
        <button class="btn btn-outline-success" type="submit" href="http://localhost:8000/register">Register</button>
        -->
        
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="http://localhost:8000/login">Log In</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="http://localhost:8000/register">Register</a>
        </li>

      </form>
    </div>
  </div>
</nav>

<!-- teste de php-->
<h1 align = "center"> 
        <?php
        print "Hello, world!\nAqui fica o teste do nosso home screen\n";
        ?>
        </h1>

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

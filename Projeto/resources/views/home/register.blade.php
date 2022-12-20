<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  



<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.nav-link {
        margin-left: 30px;
    }

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}


span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  <!-- Nav Bar com Logo tipo e butoes exemplo -->   
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="http://localhost:8000/">
      <img src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="Logo" width="40" height="40" class="rounded float-start">
      Nome Do Site
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Como clica-se no logo para voltar ao main nao precisamos deste butao que volta para o home
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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <!-- Nao usar para ja enquanto nao souber ao certo o que e
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        -->
      </ul>
      <form class="d-flex" role="search"> 
    
        <li class="nav-item list-unstyled">
        <a class="nav-link" aria-current="page" href="http://localhost:8000/login">Log In</a>
        </li>

        <li class="nav-item list-unstyled">
        <a class="nav-link" aria-current="page" href="http://localhost:8000/register">Register</a>
        </li>

     </form> 
    </div>
  </div>
</nav>



<h1 align="center">Register Form</h1>

<h>
<?php
    print "Teste de Php para verificar que está aqui\n";
    ?>
</h>

 <form action="/action_page.php" method="post">
  
  <div class="container">
  <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter your Name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your Last Name" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Register</button>
    
  </div>
</form>

</body>
</html>
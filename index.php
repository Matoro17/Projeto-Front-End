<?php
  session_start(); 
  if ($_SESSION["auth"]) {
    
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EcompJr PFC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Assets/css/round-about.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        
        <a class="navbar-brand" href="index.php">Programa de Fomento à Capacitação</a>
        <div align="center"><img src="Assets/img/logoNome.png" width="110px" align="center"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php" id="home" onload="clicke(event)">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/about.php" id="sobre" onload="clicke(event)">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/login.php" id="login" onload="clicke(event)">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/members.php" id="membros" onload="clicke(event)">Membros</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <?php
      include "view/memberbar.php";
    ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">Bem vindo ao PFC
        
      </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Melhores Pontuadores</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
       
      </div>

    </div>
    <!-- /.container -->

    <?php
      include "view/footer.html";
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

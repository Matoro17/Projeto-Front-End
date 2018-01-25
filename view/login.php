<?php
  session_start(); 
  if ($_SESSION["auth"]) {
    echo "<div><p>Loged</p></div>";
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Assets/css/round-about.css" rel="stylesheet">
    
  </head>
  <body>

    <!-- Menu -->
    <?php
        include "menu.php";
        include "memberbar.php";
    ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">Login</h1>
      <form action="../routes/routes.php" method="POST">
        <div class="form-group row">
          <label for="text-input" class="col-lg-1 col-form-label">E-mail</label>
          <div class="col-lg-3">
            <input class="form-control" type="text" name="email">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-1 col-form-label">Senha</label>
          <div class="col-lg-3">
            <input class="form-control" type="password" name="password">
          </div>
        </div>                 
        <div style="margin-bottom: 20px;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn" type="submit" name="loginAttempt" value="login" align="center">
        </div>            
      </form>
      <?php
          if(isset($_GET["valid"]) && $_GET["valid"] == "false") {
              echo "<h1> Login negado! </h1>";
          }
      ?>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
      include "footer.html";
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/jquery/index.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
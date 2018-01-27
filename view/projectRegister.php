<?php
  require_once("../controllers/MembersController.class.php");
  require_once("../controllers/ProjectsController.class.php");
  require_once("../model/Member.class.php");
  session_start(); 
  
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projetos</title>

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
    <?php
      if (isset($_SESSION['auth']) && $_SESSION['admin']) {
        include "projectRegisterContent.php";
      }
      else{
        echo "<div class='container' style='height: 200px'><b>Permissão negada para registro de Projetos</b></div>";
      }
    ?>
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
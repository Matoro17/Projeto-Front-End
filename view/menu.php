<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>

	   <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Assets/css/round-about.css" rel="stylesheet">
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        
        <a class="navbar-brand" href="../index.php">Programa de Fomento à Capacitação</a>
        <div align="center"><img src="../Assets/img/logoNome.png" width="110px" align="center"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php" id="home" onload="clicke(event)">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php" id="sobre" onload="clicke(event)">Sobre</a>
            </li>
            <li class="nav-item">
             <?php
              if (isset($_SESSION["auth"]) && $_SESSION["auth"]) {
                echo "<a class='nav-link' href='logout.php'>Logout</a>";
              }
              else{
                echo "<a class='nav-link' href='login.php' id='login' onload='clicke(event)'>Login</a>";
              }
            ?>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="members.php" id="membros" onload="clicke(event)">Membros</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../Assets/js/menuwhite.js"></script>
</body>

</html>
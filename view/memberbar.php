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
	<?php
		
		if (isset($_SESSION["auth"]) && $_SESSION["auth"]) {
			$nome = $_SESSION['name'];
			$pontos = $_SESSION['points'];
			if ($_SESSION['admin']) {
				echo "<nav class='navbar navbar-expand-lg navbar-blue bg-dark'>
					      <div class='container'>
					      	<div class='collapse navbar-collapse' id='navbarResponsive'>
					      		<b style='color:#007bff;'>Bem vindo:</b><a class='nav-link' href='home.php'> $nome</a><b style='color:#007bff;'>Pontuação - $pontos</b>	
					          <ul class='navbar-nav ml-auto'>
					            <li class='nav-item'>
					              <a class='nav-link' href='userRegister.php' id='userregister'>Cadastrar Usuario
					                <span class='sr-only'>(current)</span>
					              </a>
					            </li>
					            <li class='nav-item'>
					              <a class='nav-link' href='projectRegister.php' id='projectregister'>Cadastrar Projeto</a>
					            </li>
					          </ul>
					        </div>
					      </div>
					    </nav>";
			}
			else{
				echo "<nav class='navbar navbar-expand-lg navbar-white bg-dark'>
					      <div class='container'>
					      	<div class='collapse navbar-collapse' id='navbarResponsive'>
					      		<b style='color:#007bff;'>Bem vindo:</b><a class='nav-link' href='home.php'> $nome</a><b style='color:#007bff;'>Pontuação - $pontos</b>
					          <ul class='navbar-nav ml-auto'>
					            
					          </ul>
					        </div>
					      </div>
					    </nav>";
			}
			
		}
	?>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../Assets/js/menuwhite.js"></script>

</body>

</html>
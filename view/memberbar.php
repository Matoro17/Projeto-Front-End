<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>

	   <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Assets/css/round-about.css" rel="stylesheet">

    <script src="../Assets/js/ddmenu.js" type="text/javascript"></script>
</head>
<body>
	<?php
		
		if (isset($_SESSION["auth"]) && $_SESSION["auth"]) {
			$nome = $_SESSION['name'];
			if ($_SESSION['admin']) {
				echo "<nav class='navbar navbar-expand-lg navbar-blue bg-dark'>
					      <div class='container'>
					      	<div class='collapse navbar-collapse' id='navbarResponsive'>
					      		<a class='nav-link'>Bem vindo: </a>.$nome.
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
				echo "<nav class='navbar navbar-expand-lg navbar-blue bg-dark'>
					      <div class='container'>
					      	<div class='collapse navbar-collapse' id='navbarResponsive'>
					      		<a class='nav-link'>Bem vindo: </a>.$nome.
					          <ul class='navbar-nav ml-auto'>
					            
					          </ul>
					        </div>
					      </div>
					    </nav>";
			}
			
		}
	?>
    <!-- jQuery -->
    <script src="../Assets/js/jquery.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="../Assets/js/bootstrap.js"></script>
    <script src="../Assets/js/menuwhite.js"></script>
</body>

</html>
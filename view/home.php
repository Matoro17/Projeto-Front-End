<?php
    session_start(); 
    if(!isset($_SESSION["auth"])) {
        echo "<div><p>Loged</p></div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Assets/css/round-about.css" rel="stylesheet">

    
    <title>Seu Site</title>
    
</head>
<body>
    <!-- Menu -->
    <?php
        include "menu.php";
        include "memberbar.php";
    ?>
    <!-- Pagina Pessoal do usuário -->
    <?php
        
        
    ?>
    <!-- Footer -->
    <?php
      include "footer.html";
    ?>
</body>
</html>
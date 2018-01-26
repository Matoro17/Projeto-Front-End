<?php
     require_once("../controllers/MembersController.class.php");
     require_once("../model/Member.class.php");
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
     

        if (isset($_SESSION['auth'])) {

            $id = $_SESSION['id'];
            $control = new MembersController();            
            $_SESSION['size'] = $control->getSize();

            $atual = $control->getMember($id);
            $nome = $atual->getName();
            $age = $atual->getAge();
            $email = $atual->getEmail();
            $tel = $atual->getTelefone();
            $estado = $atual->getEstadoCivil();
            $ponto = $atual->getPontuacao();

            echo "<div class='container'>
                        <div class='form-group row' id='divHome'>
                            <div class='col-lg-5'>
                                <h5>$nome</h5>
                                <h5>$$age</h5>
                                <h5>$email</h5>
                                <h5>$tel</h5>
                                <h5>$estado</h5>
                                <h5>$ponto</h5>
                            </div>
                        </div>
                        <div class='form-group row'>
                            <div class='col-lg-5'>
                                <h4>Projetos</h4>
                            </div>
                        </div>
                  </div>";


        }  
    ?>

    <!-- Footer -->
    <?php
      include "footer.html";
    ?>
</body>
</html>
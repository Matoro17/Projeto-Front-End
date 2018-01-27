<?php
     require_once("../controllers/MembersController.class.php");
     require_once("../model/Member.class.php");
    require_once("../controllers/ProjectsController.class.php");
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
            $githug = $atual->getGithub();

            echo "<div class='container' align='center'>
                        <div class='col-lg-9 col-md-9 rounded' id='divHome'>
                            <div class='col-lg-5'>
                                <h5>Nome -> $nome</h5>
                                <h5>Github -> $githug</h5>
                                <h5>E-mail -> $email</h5>
                                <h5>Telefone -> $tel</h5>
                                <h5>Estado Civil -> $estado</h5>
                                <h5>Idade -> $age</h5>
                                <h5>Total de Pontos -> $ponto</h5>
                            </div>
                        </div>
                        <div class='col-lg-9 col-md-9 rounded' id='divHome'>
                            <div class='col-lg-5'>
                                <br>
                                <h4>Projetos</h4>
                                <div class='form-group row'>
                                    <h5>Lista dos projetos que participou</h5>
                                </div>                                
                            </div>
                        </div>                  
                  </div>";



              
                $size2 = $_SESSION['projectssize']['MAX(id)'];
                $control2 = new ProjectsController();
                $vectorr = $control2->getProjectsbyUser($id);
                
                foreach ($vectorr as $projatual) {
                    
                        $nomeproj = $projatual->getName();

                        $contratante = $projatual->getContratante();
                        $orcamento = $projatual->getOrcamento();
                        $datainicio = $projatual->getDataInicio();
                        $dataentrega = $projatual->getDataEntrega();

                        echo "<h5>$nomeproj</h5>
                                <h5>$contratante</h5>
                                <h5>$orcamento</h5>
                                <h5>$datainicio</h5>
                                <h5>$dataentrega</h5>
                                ";
                }
                  

                 



        }  
    ?>

    <!-- Footer -->
    <?php
      include "footer.html";
    ?>
</body>
</html>
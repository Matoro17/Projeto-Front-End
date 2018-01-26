<?php
     
    require_once("../controllers/MembersController.class.php");
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

    <title>Membros</title>

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
      <h1 class="my-4">Membros
        
      </h1>

    </div>
    <!-- /.container -->
    <div class="container" >
    <?php

      if (isset($_SESSION['auth'])) {
      
        $size = $_SESSION['size']['MAX(id)'];
        $control = new MembersController();
          for ($i=1; $i < $size+1; $i++) { 
            $atual = $control->getMember($i);
            $nome = $atual->getName();
            $age = $atual->getAge();
            $email = $atual->getEmail();
            $tel = $atual->getTelefone();
            $estado = $atual->getEstadoCivil();
            $ponto = $atual->getPontuacao();

            echo "  <!--Inicio de um membro -->
                    <div class='row' id='block'>
                      <div class='col-lg-2 col-md-2' >
                        <center>
                          
                          <h5>
                           $nome
                          </h5>
                        </center>
                        
                      </div>                
                      <div class='col-lg-9 col-md-9 rounded' id='sample'>
                        <div class='row my-2'>
                          <div class='col-6 '>
                            <small>
                            Idade:$age<br>
                            E-mail: $email<br>
                            Tel: $tel<br>
                            Estado Civil: $estado<br></small>
                            
                          </div>
                          <div class='col-6' align='center'>
                            PONTUAÇÃO TOTAL<br>              
                            <p align='center'>            
                              <button id='pontos' class='btn' type='button' data-toggle='collapse' data-target='#collapseExample$i' aria-expanded='false' aria-controls='collapseExample'>
                                $ponto
                              </button>
                            </p>
                          </div>
                        </div>          
                        <div class='collapse' id='collapseExample$i'><!-- ID PRECISA SER ALTERAVEL COM O PHP PARA CADA MEMBRO-->
                          <div class='card card-block' style='margin-bottom: 10px;'>
                            <table class='table-striped'>
                              <thead>
                                <tr>
                                  <td>Data</td>
                                  <td class='col-1'>Nome do Projeto</td>
                                  <td class='col-1'>Pontos</td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>      
                                  <td>12/02/2008</td>
                                  <td>Pollar</td>
                                  <td>9000</td>
                                </tr>
                                <tr>      
                                  <td>12/02/2008</td>
                                  <td>Pollar</td>
                                  <td>9000</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>       
                    </div>
                    <!--Termino de um membro -->";
          }
      }
      else{
        echo "<div class='container' style='height: 200px'><b>Faça Login para ter acesso aos usuários cadastrados</b></div>";
      }
    ?>
    </div>



    <!-- Footer -->
    <?php
      include "footer.html";
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>



</html>
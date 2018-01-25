<?php
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

    <script src="../Assets/js/ddmenu.js" type="text/javascript"></script>
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
      <!--Inicio de um membro -->
      <div class="row" id="block">
        <div class="col-lg-2 col-md-2" >
          <center>
            <img src="../Assets/img/photos/test.jpg" width="80px" class="rounded-circle">
            <h5>
             Gabriel Azevedo
            </h5>
          </center>
          
        </div>                
        <div class="col-lg-9 col-md-9 rounded" id="sample">
          <div class="row my-2">
            <div class="col-6 ">
              <small>
              Idade:<br>
              E-mail: <br>
              Tel: <br>
              Estado Civil: <br></small>
              
            </div>
            <div class="col-6" align="center">
              PONTUAÇÃO TOTAL<br>              
              <p align="center">            
                <button id="pontos" class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  18000
                </button>
              </p>
            </div>
          </div>          
          <div class="collapse" id="collapseExample"><!-- ID PRECISA SER ALTERAVEL COM O PHP PARA CADA MEMBRO-->
            <div class="card card-block" style="margin-bottom: 10px;">
              <table class="table-striped">
                <thead>
                  <tr>
                    <td>Data</td>
                    <td class="col-1">Nome do Projeto</td>
                    <td class="col-1">Pontos</td>
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
      <!--Termino de um membro -->

      <!--Inicio de um membro -->
      <div class="row" id="block">
        <div class="col-lg-2 col-md-2" >
          <center>
            <img src="../Assets/img/photos/test2.jpg" width="80px" class="rounded-circle">
            <h5>
             Ariana Pereira
            </h5>
          </center>
          
        </div>                
        <div class="col-lg-9 col-md-9 rounded" id="sample">
          <div class="row my-2">
            <div class="col-6 ">
              <small>
              Idade:<br>
              E-mail: <br>
              Tel: <br>
              Estado Civil: <br></small>
              
            </div>
            <div class="col-6" align="center">
              PONTUAÇÃO TOTAL<br>

              <p align="center">            
                <button id="pontos" class="btn" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><!-- ID PRECISA SER ALTERAVEL COM O PHP PARA CADA MEMBRO-->
                  18000
                </button>
              </p>
            </div>
          </div>          
          <div class="collapse" id="collapse2">
            <div class="card card-block" style="margin-bottom: 10px;">
              <table class="table-striped">
                <thead>
                  <tr>
                    <td>Data</td>
                    <td class="col-1">Nome do Projeto</td>
                    <td class="col-1">Pontos</td>
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
      <!--Termino de um membro -->

    </div>



    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Gabriel e Ariana 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>



</html>
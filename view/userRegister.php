<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/round-about.css" rel="stylesheet">
    <script src="../Assets/js/ddmenu.js" type="text/javascript"></script>
  </head>
  <body>

    <!-- Menu -->
    <a id="ddmenuLink" href="menu.php">Menu</a>
    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">Cadastro
        <small>Adicionar novo membro ao PFC</small>
      </h1>
      <form>
        <div class="form-group row">
          <label for="text-input" class="col-lg-1 col-form-label">Nome</label>
          <div class="col-lg-5">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-1 col-form-label">Idade</label>
          <div class="col-lg-5">
            <input class="form-control" type="text">
          </div>
        </div>        
        <div class="form-group row">
          <label for="email-input" class="col-lg-1 col-form-label">Email</label>
          <div class="col-lg-5">
            <input class="form-control" type="email" placeholder="xxx@xxx.com">
          </div>
        </div>
        <div class="form-group row">
          <label for="date-input" class="col-lg-1 col-form-label">Date</label>
          <div class="col-lg-5">
            <input class="form-control" type="date">
          </div>
        </div>
        <div class="form-check-inline">
          <label for="estcivil-input" class="col-form-label">Estado Civil</label>
            <label class="form-check-inline">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="estado">Solteiro(a)
            </label>
            <label class="form-check-inline">
              &nbsp;&nbsp;<input class="form-check-input" type="radio" name="estado">Casado(a)
            </label>
            <label class="form-check-inline">
              &nbsp;&nbsp;<input class="form-check-input" type="radio" name="estado">Divorciado(a)
            </label>
        </div>                
        <div class="form-group row">
          <label for="tel-input" class="col-lg-1 col-form-label">Teleone</label>
          <div class="col-lg-5">
            <input class="form-control" type="tel" placeholder="(xx) xxxxx-xxxx">
          </div>
        </div>
        <div class="form-group row">
          <label for="url-input" class="col-lg-1 col-form-label">Github</label>
          <div class="col-lg-5">
            <input class="form-control" type="url" placeholder="github.com/">
          </div>
        </div>
        <div style="margin-bottom: 20px;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn" type="submit" name="enviar" value="Enviar" align="center">
        </div>          
        <!--<div class="form-group row">
          <label for="pontos-input" class="col-lg-1 col-form-label">Pontuação</label>
          <div class="col-lg-5">
            <input class="form-control" type="number" placeholder="00">
          </div>
        </div>-->    
      </form>
      <?php
        if(isset($_GET["register"]) && $_GET["register"] == "true") {
            echo "<h1>Membro Registrado!</h1>";
        }
      ?>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Gabriel e Ariana 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
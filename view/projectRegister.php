<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projetos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Assets/css/round-about.css" rel="stylesheet">
    <script src="../Assets/js/ddmenu.js" type="text/javascript"></script>
  </head>
  <body>

    <!-- Menu -->
    <a id="ddmenuLink" href="menu.php">Menu</a>
    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">Projetos
        <small>Adicionar novo Projeto</small>
      </h1>
      <form>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Nome do projeto</label>
          <div class="col-lg-5">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Contratante</label>
          <div class="col-lg-5">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Orçamento Total</label>
          <div class="col-lg-2">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Desenvolvedores</label>
          <div class="col-lg-5">
            <input class="form-control" type="text" name="dev">
            <button class="btn-default">+1 Desenvolvedor</button>
          </div>
        </div>                  
        <div style="margin-bottom: 20px;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn" type="submit" name="enviar" value="Enviar" align="center">
        </div>            
      </form>
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
    <script src="vendor/jquery/index.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
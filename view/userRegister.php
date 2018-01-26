    <?php
        session_start(); 
    
        if(!isset($_SESSION["auth"])) {
            header("location:../index.php");
            echo "<div><p>Loged</p></div>";
        }
    ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro</title>

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
      <h1 class="my-4">Cadastro
        <small>Adicionar novo membro ao PFC</small>
      </h1>
      <form action="../routes/routes.php" method="POST">
        <div class="form-group row">
          <label for="text-input" class="col-lg-1 col-form-label">Nome</label>
          <div class="col-lg-5">
            <input class="form-control" type="text" name="name">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-1 col-form-label">Idade</label>
          <div class="col-lg-2">
            <input class="form-control" type="text" name="age">
          </div>
        </div>        
        <div class="form-group row">
          <label for="email-input" class="col-lg-1 col-form-label">Email</label>
          <div class="col-lg-5">
            <input class="form-control" type="email" name="email" placeholder="xxx@xxx.com">
          </div>
        </div>
        <div class="form-group row">
          <label for="date-input" class="col-lg-1 col-form-label">Date</label>
          <div class="col-lg-2">
            <input class="form-control" type="date" name="birthdate">
          </div>
        </div>
        <div class="form-check-inline">
          <label for="estcivil-input" class="col-form-label">Estado Civil</label>
            <label class="form-check-inline">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="estadocivil" <?php if (isset($estadocivil) && $estadocivil=="solteiro") echo "checked";?> value="solteiro">Solteiro(a)
            </label>
            <label class="form-check-inline">
              &nbsp;&nbsp;<input class="form-check-input" type="radio" name="estadocivil" <?php if (isset($estadocivil) && $estadocivil=="casado") echo "checked";?> value="casado">Casado(a)
            </label>
            <label class="form-check-inline">
              &nbsp;&nbsp;<input class="form-check-input" type="radio" name="estadocivil" <?php if (isset($estadocivil) && $estadocivil=="divorciado") echo "checked";?> value="divorciado">Divorciado(a)
            </label>
        </div>                
        <div class="form-group row">
          <label for="tel-input" class="col-lg-1 col-form-label">Teleone</label>
          <div class="col-lg-2">
            <input class="form-control" type="tel" placeholder="(xx) xxxxx-xxxx" name="telefone">
          </div>
        </div>
        <div class="form-group row">
          <label for="url-input" class="col-lg-1 col-form-label">Github</label>
          <div class="col-lg-5">
            <input class="form-control" type="text" placeholder="github.com/" name="github">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-1 col-form-label">Pontuação</label>
          <div class="col-lg-2">
            <input class="form-control" type="number" name="pontuacao">
          </div>
        </div>
        <div class="form-check-inline">
          <label for="estcivil-input" class="col-form-label">Administrador</label>
            <label class="form-check-inline">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="admin" <?php if (isset($admin) && $admin=="true") echo "checked";?> value="1">Sim
            </label>
            <label class="form-check-inline">
              &nbsp;&nbsp;<input class="form-check-input" type="radio" name="admin" <?php if (isset($admin) && $admin=="false") echo "checked";?> value="0">Não
            </label>
        </div> 
        <div class="form-group row">
          <label for="text-input" class="col-lg-1 col-form-label">Password</label>
          <div class="col-lg-5">
            <input class="form-control" type="text" name="password">
          </div>
        </div>                       
        <div style="margin-bottom: 20px;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn" type="submit" name="registerAttempt" value="Enviar" align="center">
        </div>             
      </form>
      <?php
        if(isset($_GET["register"]) && $_GET["register"] == "true") {
            echo "<h1>Membro Registrado!</h1>";
        }
      ?>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
      include "footer.html";
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
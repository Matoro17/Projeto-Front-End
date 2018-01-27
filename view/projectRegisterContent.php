

<div class="container" id="container">

      <!-- Introduction Row -->
      <h1 class="my-4">Projetos
        <small>Adicionar novo Projeto</small>
      </h1>
      <form action="../routes/routes.php" method="POST">
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Nome do projeto</label>
          <div class="col-lg-5">
            <input class="form-control" type="text" name="nomedoprojeto">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Contratante</label>
          <div class="col-lg-5">
            <input class="form-control" type="text" name="contratante">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Data de Início</label>
          <div class="col-lg-5">
            <input class="form-control" type="date" name="datainicio">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Data de Entrega</label>
          <div class="col-lg-5">
            <input class="form-control" type="date" name="dataentrega">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Orçamento Total</label>
          <div class="col-lg-2">
            <input class="form-control" type="number" name="orcamento">
          </div>
        </div>
        <div class="form-group row">
          <label for="text-input" class="col-lg-2 col-form-label">Desenvolvedores</label>
          <div class="col-lg-5" id="divdodev">
<<<<<<< HEAD

            <input type="hidden" name="quant" value="1" id="javu">

            <select name="developers0">
          
=======
            <select>         
>>>>>>> d56331fe8d4310987a942f72b05f9d1085fe48c9
                <?php
                          $size = $_SESSION['size']['MAX(id)'];
                          $control = new MembersController();
                            for ($i=1; $i < $size+1; $i++) { 
                              $atual = $control->getMember($i);
                              $nome = $atual->getName();
                            
                              echo "<option>".$nome."</option>";
                            }
                ?>     
            </select>
            <button type="button" class="btn" id="btndev">+1 Dev</button>
          </div>
<<<<<<< HEAD
        </div>
                          
=======
        </div>                
>>>>>>> d56331fe8d4310987a942f72b05f9d1085fe48c9
        <div style="margin-bottom: 20px;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn" type="submit" name="registerProjectAttempt" value="Enviar" align="center">
        </div>            
      </form>
      <?php
        if(isset($_GET["register"]) && $_GET["register"] == "true") {
            echo "<h1>Projeto Registrado!</h1>";
            $projectController = new ProjectsController();
            $projectController->insertConection($_SESSION['project'], $_SESSION['vector']);
        }
      ?>
</div>   
<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/jquery/adddesenvolvedor.js"></script>



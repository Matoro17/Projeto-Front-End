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

    <title>EcompJr PFC</title>

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
      <h1 class="my-4">Programa de Fomento à Capacitação
        <!--<small>It's Nice to Meet You!</small>-->
      </h1>
      <h5>O PFC é um programa de incentivo financeiro para estimular a capacitação dos membros da EcompJr através do pagamento integral ou parcial de eventos ou cursos pela empresa.</h5>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;- Qualquer membro efetivo da EcompJr poderá participar do programa;<br>&nbsp;&nbsp;&nbsp;&nbsp;- Membros desligados da empresa perderão os pontos acumulados;<br>&nbsp;&nbsp;&nbsp;&nbsp;- Serão permitidas apenas participações em eventos ou cursos que tragam algum aprendizado técnico ou teórico para o membro;<br>&nbsp;&nbsp;&nbsp;&nbsp;- O incentivo financeiro fornecido ao membro será proporcional à quantidade de pontos que este tiver acumulado;<br>&nbsp;&nbsp;&nbsp;&nbsp;- O incentivo financeiro será feito em forma de reembolso após a apresentação do comprovante de pagamento do evento ou curso;<br>&nbsp;&nbsp;&nbsp;&nbsp;- O comprovante apresentado ficará retido na empresa para prestações de contas da empresa;<br>&nbsp;&nbsp;&nbsp;&nbsp;- Cada membro não poderá ter uma pontuação que exceda 250 pontos em um único projeto;<br>&nbsp;&nbsp;&nbsp;&nbsp;- Cada membro poderá acumular seus pontos ganhos em diferentes projetos;<br>&nbsp;&nbsp;&nbsp;&nbsp;- Os pontos excedidos por projeto ou perdidos por desligamento do membro serão destinados à empresa.
      </p>
      <br>
      <h6>Divisão do Pagamento do projeto</h6>
      <div>

        <img src="../Assets/img/Graphs/grafico_1.png">
        <div class="caption">
          <p>O valor recebido por um projeto é dividido entre a empresa e a equipe:<br>80% - Empresa<br>20% - Equipe Desenvolvedora</p>
        </div>
        <img src="../Assets/img/Graphs/grafico_2.png">
        <div class="caption">
          <p>Os 80% destinados à empresa será majoritariamente destinado ao caixa interno da empresa e uma pequena parcela aos membros da diretoria:<br>81,25% - Caixa interno da empresa<br>18,75% - Membros da diretoria</p>
        </div>
        <img src="../Assets/img/Graphs/grafico_3.png">
        <div class="caption">
          <p>Os 20% destinados à equipe desenvolvedora será dividido igualmente entre os membros que desenvolveram o projeto e o membro que prospectou o projeto:<br>90% - Equipe desenvolvedora<br>10% - Prospector do projeto*<br>*Caso o membro que prospectou o projeto já seja responsável por uma atividade  equivalente (ex: Assessor de Vendas), ele receberá apenas 5% ao invés de 10%. Os 5% restante serão destinados à empresa</p>
        </div>
      </div>  
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
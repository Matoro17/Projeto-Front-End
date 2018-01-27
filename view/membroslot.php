<!--Inicio de um membro -->
<?php


      $size = $_SESSION['size']['MAX(id)'];
        $control = new MembersController();
        $control2 = new ProjectsController();
        
                
        $giant = "";        
          for ($i=1; $i < $size+1; $i++) { 
            $vectorr = $control2->getProjectsbyUser($i);
            $atual = $control->getMember($i);
            $nome = $atual->getName();
            $age = $atual->getAge();
            $email = $atual->getEmail();
            $tel = $atual->getTelefone();
            $estado = $atual->getEstadoCivil();
            $ponto = $atual->getPontuacao();

            $giant.= "  <!--Inicio de um membro -->
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
                        <div class='collapse' id='collapseExample$i'>
                          <div class='card card-block' style='margin-bottom: 10px;'>
                            <table class='table-striped'>
                              <thead>
                                <tr>
                                  <td class='col-3'>Data de Inicio</td>
                                  <td class='col-3'>Data de Entrega</td>
                                  <td class='col-2'>Nome do Projeto</td>
                                  <td class='col-2'>Contratante</td>
                                  <td class='col-2'>Orçamento</td>
                                </tr>
                              </thead>
                              <tbody>";
                                foreach ($vectorr as $projatual) {
                                        $nomeproj = $projatual->getName();
                                        $contratante = $projatual->getContratante();
                                        $orcamento = $projatual->getOrcamento();
                                        $datainicio = $projatual->getDataInicio();
                                        $dataentrega = $projatual->getDataEntrega();

                                        $giant.="<tr>      
                                          <td>$datainicio</td>
                                          <td>$dataentrega</td>
                                          <td>$nomeproj</td>
                                          <td>$contratante</td>
                                          <td>$orcamento</td>
                                        </tr>";
                                        
                                }
                                
                             $giant.= "</tbody>
                            </table>
                          </div>
                        </div>
                      </div>       
                    </div>
                    <!--Termino de um membro -->";
      
              }
              echo $giant;
      ?>
      <!--Termino de um membro -->

            
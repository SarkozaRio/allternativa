
    <?php
      include_once ("menu_job.php");


    
    ?>

    <?php
      $id = $_GET['id'];
      //Executa a consulta

      $resultado = $pdo->prepare("SELECT fa.id, fa.titulo, fa.data, cl.cliente, fa.modified FROM ficha_apropriacao fa INNER JOIN clientes cl ON fa.id_cliente = cl.id WHERE fa.id = '$id' LIMIT 1");

      $resultado ->execute();

      $result = $resultado->fetch(PDO::FETCH_ASSOC);

     
    ?>
    

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Visualizar Ficha de Apropriação</h1>
            </div>

                 

                
           

                <div class="col-xs-3 col-sm-1 col-md-1">Id:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['id']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Título:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['titulo']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Data:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['data']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Cliente:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['cliente']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Modificado:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['modified']; ?></div><br>
                 

                 <div class="pull-right">
                   <a href ='job.php?link=7&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-primary  btn-sm'>Listar</button></a>
                   <a href ='job.php?link=9&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-warning  btn-sm'>Editar</button></a>
                   <a href ='processa/processa_apagar_cliente.php?id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>
                   <a href ='job.php?link=6&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-info  btn-sm'>Nova Ficha Técnica</button></a>


                   </div>
                   <div>
                    </div>
                    <br>
                    <br>
                    <br>


                   </div>

                  <button type="button" class="btn btn-outline-primary">Descrição</button>
                  <button type="button" class="btn btn-outline-danger">Faturamento</button>
                  <button type="button" class="btn btn-outline-success">Notas e Observações</button>
                  <button type="button" class="btn btn-outline-info">Pagamentos</button>
                  


                
               
                
                
            
          </div>
        </div>
      </div>

   

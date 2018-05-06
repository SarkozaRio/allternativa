
    <?php
      include_once ("menu_job.php");


    
    ?>

    <?php
      $id = $_GET['id'];
      //Executa a consulta

      $resultado = $pdo->prepare("SELECT * FROM clientes WHERE id = '$id' LIMIT 1");

      $resultado ->execute();

      $result = $resultado->fetch(PDO::FETCH_ASSOC);

     
    ?>
    

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Visualizar Cliente</h1>
            </div>

                 

                
           

                <div class="col-xs-3 col-sm-1 col-md-1">Id:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['id']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Cliente:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['cliente']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Agência:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['agencia']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">E-mail:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['email']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Telefone:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['telefone']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Situação:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['situacao_id']; ?></div><br>
                 

                 <div class="pull-right">
                  
                   <a href ='job.php?link=4&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-warning  btn-sm'>Editar</button></a>
                   <a href ='processa/processa_apagar_cliente.php?id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>
                   
                   <a href ='job.php?link=6&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-info  btn-sm'>Nova Ficha de Apropriação</button></a>


                   </div>

                   <?php
      

                   $sql = "SELECT fa.id, fa.titulo, fa.data, cl.cliente FROM ficha_apropriacao fa INNER JOIN clientes cl ON fa.id_cliente = cl.id WHERE cl.id = $id";

      
                   $resultado = $pdo->prepare($sql);

                   $resultado->execute();



                     ?>


                      <div class="bs-docs-section">



                      <div class="row">
                        <div class="col-lg-12">
                          <div class="page-header">
                            <h4 id="tables">Fichas de Apropriação</h4>
                          </div>

                           

                          <div class="bs-component">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Título</th>
                                  <th scope="col">Data Criação</th>
                                  <th scope="col">Cliente</th>
                                                  
                                </tr>
                              </thead>

                              <tbody>

                                <?php

                                foreach($resultado as $row) {



                                echo"<tr>";
                                echo "<td>". $row['id']."</td>";
                                echo "<td>". $row['titulo']."</td>";
                                echo"<td>". $row['data']."</td>";
                                echo "<td>". $row['cliente']."</td>";
                                ?>

                                <td>  
                                 <a href ='job.php?link=8&id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-primary  btn-sm'>Visualizar</button></a>
                                 <a href ='job.php?link=9&id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-warning  btn-sm'>Editar</button></a>
                                 <a href ='processa/processa_apagar_ficha_apropriacao.php?id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>


                 <?php

                  echo"</tr>";
            
}
?>
</tbody>  
            
          </div>
        </div>
      </div>

   


   
    
    <?php
      

      $sql = "SELECT * FROM clientes ORDER BY 'id'";

      $resultado = $pdo->prepare($sql);

      $resultado->execute();

      $numero_linhas = $resultado->rowCount();

    ?>



    <div class="bs-docs-section">



        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Listar Clientes</h1>
            </div>

            

            <form action="job.php?link=10" method="post">
            <input type="text" name="busca" />
            <input type="submit" Value="Buscar" />
            </form>

            <div class="bs-component">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Agência</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Situação</th>
                
                  </tr>
                </thead>

                <tbody>

                  <?php

                  foreach($resultado as $row) {

                  echo"<tr>";
                  echo "<td>". $row['id']."</td>";
                  echo "<td>". $row['cliente']."</td>";
                  echo"<td>". $row['agencia']."</td>";
                  echo "<td>". $row['email']."</td>";
                  echo "<td>". $row['telefone']."</td>";
                  echo "<td>". $row['situacao_id']."</td>";

                  ?>
                   
                   <td>  
                   <a href ='job.php?link=5&id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-primary  btn-sm'>Visualizar</button></a>
                   <a href ='job.php?link=4&id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-warning  btn-sm'>Editar</button></a>
                   <a href ='processa/processa_apagar_cliente.php?id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>



                   <?php

                  echo"</tr>";

                   

    
    
            
}
?>
</tbody>

     
  
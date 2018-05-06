
   
    
    <?php
      

      $sql = "SELECT fa.id, fa.titulo, fa.data, cl.cliente FROM ficha_apropriacao fa INNER JOIN clientes cl ON fa.id_cliente = cl.id ORDER BY id";

      
      $resultado = $pdo->prepare($sql);

      $resultado->execute();

    

      $numero_linhas = $resultado->rowCount();

    ?>



    <div class="bs-docs-section">



        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Listar Fichas de Apropriação</h1>
            </div>

             <form action="job.php?link=11" method="post">
            <input type="text" name="busca" />
            <input type="submit" Value="Buscar" />
            </form>

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
                   <a href ='job.php?link=12&id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>



                   <?php

                  echo"</tr>";

                   

    
    
            
}
?>
</tbody>

     
  
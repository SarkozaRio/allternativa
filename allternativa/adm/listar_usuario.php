
   
    
    <?php
      

      $sql = "SELECT * FROM usuarios ORDER BY 'id'";

      $resultado = $pdo->prepare($sql);

      $resultado->execute();

      $numero_linhas = $resultado->rowCount();

    ?>




    <div class="bs-docs-section">



        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Listar Usuário</h1>
            </div>

             

            <div class="bs-component">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nivel de Acesso</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>

                <tbody>

                  <?php

                  foreach($resultado as $row) {

                  echo"<tr>";
                  echo "<td>". $row['id']."</td>";
                  echo "<td>". $row['nome']."</td>";
                  echo"<td>". $row['email']."</td>";
                  echo "<td>".$row['nivel_acesso_id']."</td>";
                  ?>
                   
                   <td>  
                   <a href ='administrativo.php?link=5&id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-primary  btn-sm'>Visualizar</button></a>
                   <a href ='administrativo.php?link=4&id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-warning  btn-sm'>Editar</button></a>
                   <a href ='processa/processa_apagar_usuario.php?id=<?php echo $row['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>



                   <?php

                  echo"</tr>";

                   

    
    
            
}
?>
</tbody>

     
  
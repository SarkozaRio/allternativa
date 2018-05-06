
    <?php
      include_once ("menu_admin.php");


    
    ?>

    <?php
      $id = $_GET['id'];
      //Executa a consulta

      $resultado = $pdo->prepare("SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");

      $resultado ->execute();

      $result = $resultado->fetch(PDO::FETCH_ASSOC);

     
    ?>
    

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Visualizar Usuário</h1>
            </div>

                 

                
           

                <div class="col-xs-3 col-sm-1 col-md-1">Id:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['id']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Nome:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['nome']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">E-mail:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['email']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Login:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['login']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Senha:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['senha']; ?></div><br>
                 <div class="col-xs-3 col-sm-1 col-md-1">Nivel Acesso:</div>
                 <div class="col-xs-9 col-sm-11 col-md-11"><?php echo $result['nivel_acesso_id']; ?></div><br>

                 <div class="pull-right">
                   <a href ='job.php?link=2&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-primary  btn-sm'>Listar</button></a>
                   <a href ='job.php?link=4&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-warning  btn-sm'>Editar</button></a>
                   <a href ='processa/processa_apagar_usuario.php?id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>
                   </div>



                
               
                
                
            
          </div>
        </div>
      </div>

   

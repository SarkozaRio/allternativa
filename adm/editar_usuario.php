
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
              <h1 id="tables">Editar Usuário</h1>
            </div>

            <div class="bs-component">
              <table class="table table-hover">
                
                <form method="POST" action="processa/processa_editar_usuario.php">
                <div class="form-group row">

                  <label for="inputNome3" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="inputNome3" placeholder="Nome" value="<?php echo $result['nome']; ?>">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $result['email']; ?>">
                  </div>

                

                <label for="inputUsuario3" class="col-sm-2 col-form-label">Usuário</label>
                  <div class="col-sm-10">
                    <input type="text" name="usuario" class="form-control" id="inputUsuario3" placeholder="Usuário" value="<?php echo $result['login']; ?>">
                  </div>

                  </div>

                <div class="form-group row">
                  <label for="inputSenha3" class="col-sm-2 col-form-label">Senha</label>
                  <div class="col-sm-10">
                    <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="Senha" value="<?php echo $result['senha']; ?>">
                  </div>


                </div>

                <select class="custom-select" name="nivel_de_acesso" value="<?php echo $result['nivel_acesso_id']; ?>">
                <option>Escolha o nível de acesso</option>
                <option value="1" 
                  <?php 
                    if ($result['nivel_acesso_id'] == 1) {
                      echo 'selected';
                    }


                   ?>

                  >TI</option>
                <option value="2"
                <?php 
                    if ($result['nivel_acesso_id'] == 2) {
                      echo 'selected';
                    }


                   ?>
                    >Administrativo</option>
                <option value="3"
                <?php 
                    if ($result['nivel_acesso_id'] == 3) {
                      echo 'selected';
                    }


                   ?>
                   >Financeiro</option>
                <option value="4"
                <?php 
                    if ($result['nivel_acesso_id'] == 2) {
                      echo 'selected';
                    }


                   ?>>Produção</option>
                <option value="5">Pós-Produção</option>
                <option value="6">TI</option>

               </select>


               <input type="hidden" name="id" value="<?php echo $result['id']; ?>" >
                              
                <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-success btn-sm">Concluir</button>

                </div>
                 </div>

                 <div class="pull-right">
                    <a href ='administrativo.php?link=2&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-primary  btn-sm'>Listar</button></a>
                    <a href ='processa/processa_apagar_usuario.php?id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>

                  </div>
              </form>

                

                </div>

                <tbody>
                  
                     

                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

   

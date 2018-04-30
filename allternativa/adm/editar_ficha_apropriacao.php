
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
              <h1 id="tables">Editar Cliente</h1>
            </div>

            <div class="bs-component">
              <table class="table table-hover">
                
                <form method="POST" action="processa/processa_editar_cliente.php">
                <div class="form-group row">

                  <label for="inputCliente3" class="col-sm-2 col-form-label">Cliente</label>
                  <div class="col-sm-10">
                    <input type="text" name="cliente" class="form-control" id="inputCliente3" placeholder="Cliente" value="<?php echo $result['cliente']; ?>">
                  </div>

                   <label for="inputAgencia3" class="col-sm-2 col-form-label">Agência</label>
                  <div class="col-sm-10">
                    <input type="text" name="agencia" class="form-control" id="inputAgencia3" placeholder="Agência" value="<?php echo $result['agencia']; ?>">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $result['email']; ?>">
                  </div>

                

                <label for="inputTelefone3" class="col-sm-2 col-form-label">Telefone</label>
                  <div class="col-sm-10">
                    <input type="text" name="telefone" class="form-control" id="inputTelefone3" placeholder="Telefone" value="<?php echo $result['telefone']; ?>">
                  </div>

                  </div>

                

                


               <input type="hidden" name="id" value="<?php echo $result['id']; ?>" >
                              
                <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-success btn-sm">Concluir</button>

                </div>
                 </div>

                 <div class="pull-right">
                    <a href ='job.php?link=2&id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-primary  btn-sm'>Listar</button></a>
                    <a href ='processa/processa_apagar_cliente.php?id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>

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

   

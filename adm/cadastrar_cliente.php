
    <?php
      include_once ("menu_job.php");
    
    ?>


    

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Cadastrar Cliente</h1>
            </div>

            <div class="bs-component">
              <table class="table table-hover">
                
                <form method="POST" action="processa/processa_cadastrar_cliente.php">
                <div class="form-group row">

                  <label for="inputCliente3" class="col-sm-2 col-form-label">Cliente</label>
                  <div class="col-sm-10">
                    <input type="text" name="cliente" class="form-control" id="inputCliente3" placeholder="Cliente">
                  </div>

                  <label for="inputAgencia3" class="col-sm-2 col-form-label">Agência</label>
                  <div class="col-sm-10">
                    <input type="text" name="agencia" class="form-control" id="inputAgencia3" placeholder="Agência">
                  </div>


                  <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>

                  <label for="inputTelefone3" class="col-sm-2 col-form-label">Telefone</label>
                  <div class="col-sm-10">
                    <input type="text" name="telefone" class="form-control" id="inputTelefone3" placeholder="Telefone">
                  </div>

                   <select class="custom-select" name="situacao">
                <option selected>Situação do cliente</option>
                <option value="1">Ativo</option>
                <option value="2">Inativo</option>
                
               </select>


                                 
                              
                <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>

                </div>
                 </div>

                  

              </form>
                <tbody>
                  
                     

                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

   

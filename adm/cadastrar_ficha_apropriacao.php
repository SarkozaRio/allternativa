
    <?php
      include_once ("menu_job.php");


      $sql = "SELECT * FROM clientes";
    

      $result = $pdo->prepare($sql);

      $result->execute();

    
    
    ?>



     

    

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Nova Ficha Apropriação</h1>
            </div>

            <div class="bs-component">
              <table class="table table-hover">
                
                <form method="POST" action="processa/processa_cadastrar_ficha_apropriacao.php">
                <div class="form-group row">

                  <label for="inputTitulo3" class="col-sm-2 col-form-label">Título</label>
                  <div class="col-sm-10">
                    <input type="text" name="titulo" class="form-control" id="inputTitulo3" placeholder="Título">
                  </div>

                  <label for="inputData3" class="col-sm-2 col-form-label">Data</label>
                  <div class="col-sm-10">
                    <input type="date" name="data" class="form-control" id="inputData3" placeholder="Data">
                  </div>

                  </div>

                  <select class="custom-select" name="id_cliente"> 

                  <?php

                   if($result){

     
                   while ($resultado = $result->fetch(PDO::FETCH_ASSOC)) {

                    echo '<option value="'.$resultado['id'].'">'.$resultado['cliente'].'</option>';

                   }
           
                  }else{
                  echo 'Nada encontrado';
        
                  }
                    ?>
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

   

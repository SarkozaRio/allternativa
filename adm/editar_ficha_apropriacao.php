
    <?php
      $id = $_GET['id'];
      //Executa a consulta

      $resultado = $pdo->prepare("SELECT * FROM ficha_apropriacao WHERE id = '$id' LIMIT 1");

      $resultado ->execute();

      $result = $resultado->fetch(PDO::FETCH_ASSOC);

     
    ?>
    

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Editar Ficha de Apropriação</h1>
            </div>

            <div class="bs-component">
              <table class="table table-hover">
                
                <form method="POST" action="processa/processa_editar_ficha_apropriacao.php">
                <div class="form-group row">

                  <label for="inputTitulo3" class="col-sm-2 col-form-label">Título</label>
                  <div class="col-sm-10">
                    <input type="text" name="titulo" class="form-control" id="inputTitulo3" placeholder="Título" value="<?php echo $result['titulo']; ?>">
                  </div>

                   <label for="inputData3" class="col-sm-2 col-form-label">Data</label>
                  <div class="col-sm-10">
                    <input type="date" name="agencia" class="form-control" id="inputData3" placeholder="Data" value="<?php echo $result['data']; ?>">
                  </div>

                  </div>

                

                


               <input type="hidden" name="id" value="<?php echo $result['id']; ?>" >
                              
                <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-success btn-sm">Concluir</button>

                </div>
                 </div>

                 <div class="pull-right">
                    
                    <a href ='processa/processa_apagar_ficha_apropriacao.php?id=<?php echo $result['id']; ?>'><button type='button' class='btn btn-danger  btn-sm'>Apagar</button></a>

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

   

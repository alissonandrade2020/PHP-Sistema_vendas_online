    <div id="alerta">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Usuário</strong>, coloque nos campos abaixo o PRODUTO e o VALOR, depois clique em <strong>cadastrar</strong> para efetuarmos o cadastro com sucesso !
        </div>
    </div>    
    <script>
      $().ready(function() {
        setTimeout(function () {
          $('#alerta').hide(); // "alerta" é o id do elemento que seja manipular.
	      }, 1200); // O valor é representado em milisegundos.
      });
    </script>
<main>
    <section>
        <a href="index.php">
            <button class="btn btn-outline-warning">Voltar</button>
        </a>
    </section>
    <h2 class="mt-3"><?=TITLE?></h2>
    <form method="post">
    <div class="container">   
        <div class="row">
            <input type="hidden" name="id" />
            <div class="form-group col-md-4">
                <label>Produto</label>
                <input type="text" class="form-control" name="produto" placeholder="Ex: Monitor" value="<?=$obProduto->produto?>" required>
            </div>
            
            <div class="form-group col-md-4">
                <label>Quantidade:</label>
                <input type="numeric" class="form-control" name="quantidade" placeholder="Ex: 15" value="<?=$obProduto->quantidade?>" required>
            </div>
            <div class="form-group col-md-4">
                <label>Valor do Produto</label>
                <input type="text" class="form-control"  name="preco" placeholder="Ex: R$ 1.487,00" value="<?=$obProduto->preco?>" required>
            </div>  
            <div class="form-group col-md-4">
              <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
              <div>
                <input name="imagem" type="file"/>
              </div>
            </div>            
            <div class="form-group col-md-4"> 
              <label>Estoque:</label>         

              <div>
                <div class="form-check form-check-inline">
                  <label class=custom-control-label" for="customRadio2">
                    <input type="radio" name="ativo" value="s" checked> Disponível
                  </label>  
                </div>

                <div class="form-check form-check-inline">
                  <label class=custom-control-label" for="customRadio2">
                    <input type="radio" name="ativo" value="n" <?=$obProduto->ativo == 'n' ? 'checked' : ''?>> Indisponível
                  </label>  
                </div>

              </div>            
             
            </div>   
        </div>
        <input type="submit" class="btn btn-success mb-2" value="Cadastrar">
        <br>
    </div>

</form>
     
</main>

  <div id="alerta">
      <div class="alert alert-danger" role="alert">
        <strong>Cliente</strong>, coloque seu NOME COMPLETO e CPF/CNPJ depois clique em <strong>cadastrar</strong> para salvar seus dados !
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
            <div class="form-group col-md-4">
                <label>Nome Completo</label>
                <input type="text" class="form-control" name="nome_cliente" placeholder="Nome Completo" value="<?=$obCliente->nome_cliente?>" required>
            </div>
            <div class="form-group col-md-4">
                <label>CPF/CNPJ</label>
                <input type="numeric" class="form-control" name="cpf_cnpj" placeholder="Digite seu CPF/CNPJ" value="<?=$obCliente->cpf_cnpj?>" required>
            </div>        
        </div>
        <input type="submit" class="btn btn-success mb-2" value="Cadastrar">
        <br>
    </div>

</form>
     
</main>

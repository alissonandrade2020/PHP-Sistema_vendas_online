  <div id="alerta">
      <div class="alert alert-primary" role="alert">
        <strong>Oloco, meu!</strong> Parabéns, vamos desenvolver esse desafio !    
      </div>
  </div>
  <script>
    var div = document.getElementById('alerta');
    div.style.display = 'none';
    setInterval(function() {
        div.style.display = 'block';
    }, 5000);
    </script>
<main>
    <section>
        <a href="clientes.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Cadastrar Cliente(es)</a>
        <a href="produto.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Cadastrar Produto(os)</a>
        <a href="lista_clientes.php" class="btn btn-outline-secondary" role="button" aria-pressed="true">Lista dos Clientes</a>
        <a href="lista_produtos.php" class="btn btn-outline-secondary" role="button" aria-pressed="true">Lista dos Produtos</a>
        <a href="lista_compras.php" class="btn btn-success" role="button" aria-pressed="true">Comprar Produtos</a>
    </section>
    <br>
    <br>   
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cliente + Produto</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">- Um cliente poderá comprar um ou mais produtos na mesma venda</div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">- Uma venda poderá apresentar o mesmo item uma ou mais vezes;</div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">- Quando o cliente concluir um pedido, o sistema deve exibir uma listar com todos os produtos e o valor total da venda.</div>
    </div>
    </div>
</main>


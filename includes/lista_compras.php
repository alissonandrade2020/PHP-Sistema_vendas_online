<div id="alerta">
        <div class="alert alert-danger" role="alert">
            <strong>CLIENTE:</strong> Antes de finalizar seu <b>pedido</b> verifique se os <b>produtos</b> que vai <b>adicionar no carrinho</b> são os que você realmente deseja comprar  !    
        </div>
    </div>
    <script>
      $().ready(function() {
        setTimeout(function () {
          $('#alerta').hide(); // "alerta" é o id do elemento que seja manipular.
	      }, 1200); // O valor é representado em milisegundos.
      });
    </script>
<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($produtos as $produto){
    $resultados .= '<tr>
                      <td>'.$produto->produto.'</td>
                      <td>'.$produto->imagem.'</td>
                      <td>'.$produto->preco.'</td>
                      <td>'.($produto->ativo == 's' ? 'Disponível' : 'Indisponível').'</td>
                      <td>    
                      <a href="cart.php" class="btn btn-primary" role="button" aria-pressed="true">Adicionar ao Carrinho</a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhum produto encontrado
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="index.php">
      <button class="btn btn-outline-warning">Voltar</button>
    </a>
  </section>
  <br>
  <div class="container">
    <section>
      <table class="table table-striped table-dark" class="table bg-light mt-3">
        <thead class="thead-light">
          <tr>
            <th>Produto</th>
            <th>Fotos</th>
            <th>Preco</th>
            <th>Status</th>
            <th colspan="2" align="center"></th>            
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
      </table>

    </section>
  </div>


</main>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="text-center">
                            <h1>Camiseta azul importada</h1>
                            <p>R$ 129,00</p>
                            <a href="#" class="btn btn-primary btn-lg">Comprar</a>
                        </div>            
                    </div>         
                </div>
            </div>
            
        </main>
</main>
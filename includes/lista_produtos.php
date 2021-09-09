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
                      <td>'.$produto->id.'</td>
                      <td>'.$produto->produto.'</td>
                      <td>'.$produto->quantidade.'</td>
                      <td>'.$produto->preco.'</td>
                      <td>'.($produto->ativo == 's' ? 'Disponível' : 'Indisponível').'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($produto->data)).'</td>
                      <td>
                        <a href="editarProduto.php?id='.$produto->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluirProduto.php?id='.$produto->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
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
    <a href="produto.php">
      <button class="btn btn-success">Novo produto</button>
    </a>
  </section>
  <br>
  <section>

    <table class="table table-dark" class="table bg-light mt-3">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preco</th>
            <th>Status</th>
            <th>Data</th>
            <th  colspan="2" align="center">Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>
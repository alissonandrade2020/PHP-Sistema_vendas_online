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
  foreach($clientes as $cliente){
    $resultados .= '<tr>
                      <td>'.$cliente->id.'</td>
                      <td>'.$cliente->nome_cliente.'</td>
                      <td>'.$cliente->cpf_cnpj.'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($cliente->data)).'</td>
                      <td>
                        <a href="editarCliente.php?id='.$cliente->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluirCliente.php?id='.$cliente->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhum cliente encontrado
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="index.php">
      <button class="btn btn-outline-warning">Voltar</button>
    </a>
    <a href="cliente.php">
      <button class="btn btn-success">Novo cliente</button>
    </a>
  </section>
  <br>
  <section>

    <table class="table table-dark" class="table bg-light mt-3">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF/CNPJ</th>
            <th>Data</th>
            <th colspan="2" align="center">Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>
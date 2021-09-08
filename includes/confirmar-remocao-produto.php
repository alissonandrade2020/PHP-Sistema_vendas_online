<main>

  <h2 class="mt-3">Remover produto do carrinho</h2>

  <form method="post">

    <div class="form-group">
      <p>Você deseja realmente remover do carrinho: <strong><?=$obProduto->produto?></strong>?</p>
    </div>

    <div class="form-group">
      <a href="cart.php">
        <button type="button" class="btn btn-success">Cancelar</button>
      </a>

      <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
    </div>

  </form>

</main>
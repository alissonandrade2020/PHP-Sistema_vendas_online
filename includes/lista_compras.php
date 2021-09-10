  <style type="text/css">
    *{margin: 0; padding: 0; box-sizing: border-box;}
     h2.title{
       background-color: #808080;
       width: 100%;
       padding: 20px;
       text-align: center;
       color: white;
       border-radius: 10px 20px 30px;
     }

     .carrinho-container{
       display: flex;
       margin-top:10px
     }

     .produto{
        width: 33.3%;
        padding: 0 30px;        
     }
  </style>
    
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

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="index.php">
      <button class="btn btn-outline-warning">Voltar</button>
    </a>
  </section>
  <br>
  <h2 class="title">Escolha o(os) produto(os)</h2>
  <div class="carrinho-container">

  <?php  

    $items = array("azul", "vermelho", "amarelo", "verde"); 

   foreach ($items as $key){
     
 ?>

    <div class="produto">
      <img src="<?php echo $value['imagem']?>" />
      <a class="btn btn-primary" role="button" aria-pressed="true" href="?adicionar=<?php echo $key ?>">Adicionar ao Carrinho</a>
    </div>
  </div>      
    
  <?php
   }

  ?>    <div></div><!-- CarrinhoContainer-->
  <?php
    if(isset($_GET['adicionar'])){
      $produto = (int) $_GET['adicionar'];

    }

  ?>
  
</main>
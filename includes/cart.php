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
     }

     .produto img{
        max-width: 50%;   
     }

     .produto{
        width: 52.3%;
        padding: 0 10px;   
   
     }          
     .carrinho-item{
        max-width: 1000px;
        margin:10px auto;
        padding: bottom 10px;
        
        border-bottom: 2px dotted #ccc; 
     }

     .carrinho-item p {
        font-size: 19px;
        color: #ebebeb;
     }

  </style>
    
    <div id="alerta">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>CLIENTE:</strong> Você estar a um passo de finalizar o <b>pedido</b> verifique se os <b>produtos</b> que vai <b>no carrinho</b> são os que você realmente deseja comprar  !    
        </div>
    </div>    
    <script>
      $().ready(function() {
        setTimeout(function () {
          $('#alerta').hide(); // "alerta" é o id do elemento que seja manipular.
	      }, 1200); // O valor é representado em milisegundos.
      });
    </script>
  
  <section>
    <a href="lista_compras.php">
      <button class="btn btn-outline-warning">Voltar</button>
    </a>
  </section>
  
<br>
<?php
    session_start();
    foreach ($_SESSION['carrinho'] as $key => $value) {
       //Nome do produto
       //Quantidade
       //preço
       echo '<div class="carrinho-item">';
       echo '<p>Produto: '.$value['produto'].' | Quantidade: '.$value['quantidade'].' | Preço: '.($value['preco']).'</p>';
       echo '</div>';
   
      }
    
  ?>

       
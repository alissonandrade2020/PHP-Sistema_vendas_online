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
$conection = new PDO('mysql:host=localhost;dbname=vendasonline', 'root', '');

$query   = $conection->prepare("SELECT * FROM produtos");
$query->execute();
$result = $query->fetchAll();

foreach($result as $produto){
    echo 'Produto: '.$produto['produto'].'<br/>';
    echo 'Quantidade: '.$produto['quantidade'].'<br/>';
    echo 'Valor unitário: '.number_format($produto['preco'], 2, ",",".").'<br/>';
    echo '<a href="removerProduto.php?id='.$produto['id'].'"><button type="button" class="btn btn-danger">Remover</button></a><br><br>';


  }       

?>       
       <th><b>Total de Itens selecionados:</b>
           <?php
			
          $conn = mysqli_connect('localhost','root','','vendasonline');	
          
          $resultado = mysqli_query($conn, "SELECT sum(quantidade) FROM produtos");
          $linhas = mysqli_num_rows($resultado);
        
          while($linha = mysqli_fetch_array($resultado)){
            echo $linha['sum(quantidade)'].'<br/><br/>';
              ?>
                
              <?php
                }
          ?>
      </th>

      <th><b>Total:</b>
           <?php
			
            $conn = mysqli_connect('localhost','root','','vendasonline');	
          
            $resultado = mysqli_query($conn, "SELECT sum(preco) FROM produtos");
            $linhas = mysqli_num_rows($resultado);
          
            while($linha = mysqli_fetch_array($resultado)){
              echo $linha['sum(preco)'].'<br/><br/>';
              
                ?>
          
            <?php
              }
          ?>
      </th>				



       
<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Compra');

use \App\Entity\Compra;

$obCompra = new Compra;

// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
// Validação do Post 
if(isset(
    $_POST['id_cliente'],
    $_POST['id_produto'],
    $_POST['produto'],
    $_POST['quantidade'],
    $_POST['preco'])
    ){
   
    $obCompra = new Compra;
    $obCompra->id_cliente  = $_POST['id_cliente'];
    $obCompra->id_produto  = $_POST['id_produto'];
    $obCompra->produto     = $_POST['produto'];
    $obCompra->quantidade  = $_POST['quantidade'];
    $obCompra->preco       = $_POST['preco'];
    $obCompra->atualizar();

    //echo "<pre>"; print_r($obProduto); echo "</pre>"; exit;
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/app/view/header.php';
include __DIR__.'/app/view/cart.php';
include __DIR__.'/app/view/footer.php';



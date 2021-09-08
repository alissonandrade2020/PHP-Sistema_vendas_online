<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Produto');

use \App\Entity\Produto;

$obProduto = new Produto;

// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
// Validação do Post 
if(isset(
    $_POST['produto'],
    $_POST['quantidade'],
    $_POST['preco'],
    $_POST['ativo'])
    ){
   
    $obProduto = new Produto;
    $obProduto->produto    = $_POST['produto'];
    $obProduto->quantidade = $_POST['quantidade'];
    $obProduto->preco      = $_POST['preco'];
    $obProduto->ativo      = $_POST['ativo'];
    $obProduto->cadastrar();

    //echo "<pre>"; print_r($obProduto); echo "</pre>"; exit;
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form_produto.php';
include __DIR__.'/includes/footer.php';



<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar produto');

use \App\Entity\Produto;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA O PRODUTO
$obProduto = Produto::getProduto($_GET['id']);

//VALIDAÇÃO DO PRODUTO
if(!$obProduto instanceof Produto){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['produto'],$_POST['quantidade'],$_POST['preco'],$_POST['ativo'])){
  
  $obProduto->produto = $_POST['produto'];
  $obProduto->imagem = $_POST['imagem'];
  $obProduto->quantidade = $_POST['quantidade'];
  $obProduto->preco = $_POST['preco'];
  $obProduto->ativo = $_POST['ativo'];
  $obProduto->atualizar();

  header('location: lista_produtos.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form_produto.php';
include __DIR__.'/includes/footer.php';
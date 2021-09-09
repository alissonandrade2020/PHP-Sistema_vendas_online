<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar cliente');

use \App\Entity\Cliente;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA O CLIENTE
$obCliente = Cliente::getCliente($_GET['id']);

//VALIDAÇÃO DO CLIENTE
if(!$obCliente instanceof Cliente){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome_cliente'],$_POST['cpf_cnpj'])){

  $obCliente->nome_cliente = $_POST['nome_cliente'];
  $obCliente->cpf_cnpj = $_POST['cpf_cnpj'];
  $obCliente->atualizar();

  header('location: lista_clientes.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form_cliente.php';
include __DIR__.'/includes/footer.php';
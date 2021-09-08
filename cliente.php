<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Cliente');

use \App\Entity\Cliente;

$obCliente = new Cliente;

// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
// Validação do Post 
if(isset(
    $_POST['nome_cliente'],
    $_POST['cpf_cnpj'])
    ){
   
    $obCliente = new Cliente;
    $obCliente->nome_cliente   = $_POST['nome_cliente'];
    $obCliente->cpf_cnpj = $_POST['cpf_cnpj'];
    $obCliente->cadastrar();

    //echo "<pre>"; print_r($obCliente); echo "</pre>"; exit;

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form_cliente.php';
include __DIR__.'/includes/footer.php';



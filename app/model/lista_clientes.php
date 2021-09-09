<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Cliente;

$clientes = Cliente::getClientes();

include __DIR__.'/app/view/header.php';
include __DIR__.'/app/model/lista_clientes.php';
include __DIR__.'/app/model/footer.php';
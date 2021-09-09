<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;

$produtos = Produto::getProdutos();

include __DIR__.'/app/view/header.php';
include __DIR__.'/app/model/lista_compras.php';
include __DIR__.'/app/view/footer.php';
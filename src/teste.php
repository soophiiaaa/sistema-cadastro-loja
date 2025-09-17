<?php

require_once __DIR__ . '/Core/Autoloader.php';

use Lacerda\Commercial\Models\Store;
use Lacerda\Commercial\Models\Product;

$loja = new Store();

$produto = new Product('ID001', 'CANETA', 'UMA CANETA', 3.2, 56);
$produto1 = new Product('ID002', 'CADERNO', 'UMA CADERNO', 3.2, 56);

$loja->addProduct($produto);
$loja->addProduct($produto1);

$loja->getProductById('ID001');
$loja->deleteProduct('CANETA');

$loja->showProducts();

// var_dump($produto);

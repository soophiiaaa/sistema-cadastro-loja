<?php

require_once __DIR__ . '/Core/Autoloader.php';

use Lacerda\Commercial\Models\Product;

$produto = new Product('ID001', 'CANETA', 'UMA CANETA', 3.2, 56);

var_dump($produto);

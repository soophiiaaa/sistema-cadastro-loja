<?php

require_once 'models/Product.php';

$product1 = new Product('Celular', 'Celular Samsung', 3500);

echo "{$product1->getName()}\n";
echo "{$product1->getDescription()}\n";
echo "{$product1->getPrice()}\n";

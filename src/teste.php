<?php

require_once __DIR__ . '/Core/Autoloader.php';

use Lacerda\Commercial\Models\Store;
use Lacerda\Commercial\Models\Electronic;

$loja = new Store();

$smartTv = new Electronic('ELEC-TV-4K-001', '55-inch 4K Smart TV', 'A high-definition smart television with built-in streaming apps and voice control.', 699.99, 50, 24, 'TechVision');

echo $smartTv->checkWarranty(28);

$loja->addProduct($smartTv);
$loja->showProducts();

// var_dump($produto);

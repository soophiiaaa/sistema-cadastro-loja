<?php

require_once __DIR__ . '/../Core/Autoloader.php';

use Lacerda\Commercial\Models\Electronic;

$smartWatch = new Electronic('SMW001', 'Smartwatch FitPulse 3.0', 
'Smart watch with heart rate monitoring, GPS and water resistance.',
1200, 50, 24, 'TechGear');

$gamingChair = new Electronic('CGR205', 'ErgoPro Gaming Chair',
'Ergonomic chair with adjustable lumbar support, synthetic leather upholstery, and 180° recline.',
899.9, 25, 12, 'GameFlex');

$espressoMachine = new Electronic('CFS450', 'Premium Touch Espresso Machine',
'Espresso coffee machine with a touchscreen, built-in bean grinder, and steam wand.',
450.5, 80, 6, 'CoffeeMaster');

$externalSsd = new Electronic('SSD789', 'UltraSpeed 1TB External SSD',
'1TB external solid-state drive with 500 MB/s read speed and USB-C connectivity.',
350, 150, 36, 'DataVault');

$bluetoothHeadPhones = new Electronic('FOB612', 'SoundWave Pro Wireless Headphones',
'Wireless headphones with active noise cancellation, 20 hours of battery life, and a charging case.',
299.99, 200, 12, 'AudioFLow');

echo $smartWatch->id;
echo $smartWatch->name;
echo $smartWatch->description;
echo $smartWatch->price;
echo $smartWatch->quantity;
echo $smartWatch->warranty;
echo $smartWatch->brand;
echo $smartWatch->checkWarranty(12);

echo "================================================\n";

echo $gamingChair->id;
echo $gamingChair->name;
echo $gamingChair->description;
echo $gamingChair->price;
echo $gamingChair->quantity;
echo $gamingChair->warranty;
echo $gamingChair->brand;
echo $gamingChair->checkWarranty(15);

echo "================================================\n";

echo $espressoMachine->id;
echo $espressoMachine->name;
echo $espressoMachine->description;
echo $espressoMachine->price;
echo $espressoMachine->quantity;
echo $espressoMachine->warranty;
echo $espressoMachine->brand;
echo $espressoMachine->checkWarranty(10);

echo "================================================\n";

echo $externalSsd->id;
echo $externalSsd->name;
echo $externalSsd->description;
echo $externalSsd->price;
echo $externalSsd->quantity;
echo $externalSsd->warranty;
echo $externalSsd->brand;
echo $externalSsd->checkWarranty(25);

echo "================================================\n";

echo $bluetoothHeadPhones->id;
echo $bluetoothHeadPhones->name;
echo $bluetoothHeadPhones->description;
echo $bluetoothHeadPhones->price;
echo $bluetoothHeadPhones->quantity;
echo $bluetoothHeadPhones->warranty;
echo $bluetoothHeadPhones->brand;
echo $bluetoothHeadPhones->checkWarranty(2);

echo "================================================\n";

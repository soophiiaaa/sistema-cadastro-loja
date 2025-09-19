<?php

require_once __DIR__ . '/../Core/Autoloader.php';

use Lacerda\Commercial\Models\Clothing;

$denimJacket = new Clothing('DJT456', 'Classic Denim Jacket', 
'A timeless jacket made from durable denim,featuring a button-down front and two chest pockets.',
75, 150, ['S', 'M', 'L', 'XL'], '100% Cotton');

$runningTShirt = new Clothing('RTS101', 'Active-Dry Performance T-Shirt',
'Lightweight and moisture-wicking t-shirt designed for high-intensity workouts.',
30, 300, ['XS', 'S', 'M', 'L'], 'Polyester Blend');

$woolScarf = new Clothing('WSC222', 'Cozy Knit Winter Scarf',
"A soft and warm scarf, perfect for cold weather. It's made from high-quality wool for maximum comfort.",
45.5, 50, ['S'], '100% Merino Wool');

$menDressShirt = new Clothing('MDS789', 'Executive Fit Dress Shirt',
'A formal long-sleeve shirt with a tailored fit, suitable for professional and formal occasions.',
65, 120, ['15-32', '15.5-33', '16-34', '17-35'], 'Cotton Twill');

$yogaLeggin = new Clothing('YLG333', 'Stretch & Flex Yoga Leggings',
'High-waisted leggings that provide excellent support and flexibility for yoga and other activities.',
55, 200, ['S', 'M', 'L'], 'Spandex/Nylon');

echo $denimJacket->id;
echo $denimJacket->name;
echo $denimJacket->description;
echo $denimJacket->price;
echo $denimJacket->quantity;
var_dump($denimJacket->sizes);
echo $denimJacket->material;
echo $denimJacket->checkAvaliability('XL');

echo "================================================\n";

echo $runningTShirt->id;
echo $runningTShirt->name;
echo $runningTShirt->description;
echo $runningTShirt->price;
echo $runningTShirt->quantity;
var_dump($runningTShirt->sizes);
echo $runningTShirt->material;
echo $runningTShirt->checkAvaliability('XXS');

echo "================================================\n";

echo $woolScarf->id;
echo $woolScarf->name;
echo $woolScarf->description;
echo $woolScarf->price;
echo $woolScarf->quantity;
var_dump($woolScarf->sizes);
echo $woolScarf->material;
echo $woolScarf->checkAvaliability('M');

echo "================================================\n";

echo $menDressShirt->id;
echo $menDressShirt->name;
echo $menDressShirt->description;
echo $menDressShirt->price;
echo $menDressShirt->quantity;
var_dump($menDressShirt->sizes);
echo $menDressShirt->material;
echo $menDressShirt->checkAvaliability('15-32');

echo "================================================\n";

echo $yogaLeggin->id;
echo $yogaLeggin->name;
echo $yogaLeggin->description;
echo $yogaLeggin->price;
echo $yogaLeggin->quantity;
var_dump($yogaLeggin->sizes);
echo $yogaLeggin->material;
echo $yogaLeggin->checkAvaliability('XL');

echo "================================================\n";

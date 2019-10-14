<?php


require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\SayHello;
use App\Wcs\Hello;

$object1 = new Hello();
$object2 = new SayHello();

echo $object1->talk();
echo '<br>';
echo $object2::world();
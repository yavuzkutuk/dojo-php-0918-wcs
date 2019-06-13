<?php

require('./vendor/autoload.php');

use App\{Circle, Rectangle,Square};

$circle = new Circle();
$circle->setRadius(3);
echo $circle;

$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(5);
echo $rectangle;

$square = new Square(4.0);
$square->setSide(2);
echo  $square;



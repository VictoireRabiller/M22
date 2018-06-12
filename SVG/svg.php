<?php

include 'classes/Rectangle.php';
include 'classes/Circle.php';
include 'classes/Square.php';

$rect1 = new Rectangle(100, 50);
$rect1->setPosition(200, 10);
$rect1->setColor('red');


$rect2 = new Rectangle(50, 200);
$rect2->setPosition(0, 100);
$rect2->setColor('green');

$circ1 = new Circle(100);
$circ1->setPosition(150, 150);
$circ1->setColor('yellow');


$squa1 = new Square (70);
$squa1->setPosition(150, 100);
$squa1->setColor('blue');
$squa1->setOpacity(0.5);

include 'views/svg.phtml';

<?php

include 'classes/Shape.php';
include 'classes/Rectangle.php';
include 'classes/Circle.php';
include 'classes/Square.php';
include 'classes/Triangle.php';
include 'classes/Canvas.php';

$canvas = new Canvas();


$circ1 = new Circle(70);
$circ1->setPosition(100, 100);
$circ1->setOpacity(0.8);
$circ1->setColor("red");

$rect1 = new Rectangle(100, 50);
$rect1->setPosition(250, 50);
$rect1->setOpacity(0.8);
$rect1->setColor("yellow");

$canvas->addShape($rect1);

$rect2 = new Rectangle(100, 50);
$rect2->setPosition(150, 100);
$rect2->setOpacity(0.8);
$rect2->setColor("pink");

$squa1 = new Square (70);
$squa1->setPosition(80, 20);
$squa1->setOpacity(0.8);
$squa1->setColor("green");

$tria1 = new Triangle([10,10], [200,200], [200,300]);
$tria1->setOpacity(0.8);
$tria1->setColor("blue");


$canvas->addShapes([$circ1, $rect2, $squa1, $tria1]);


include 'views/svg.phtml';

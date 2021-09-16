<?php
use classes\Circle;
use classes\Rectangle;
use classes\Rhombus;
use classes\Trapezoid;
use classes\Triangle;

// require "autoload.php";
spl_autoload_register();
// require_once "interfaces\Area_Perimeter.php";

$circle = new Circle(5);
$circle->returnResult();

$rectangle = new Rectangle(5,4);
$rectangle->returnResult();

$rhombus = new Rhombus(4,5,8);
$rhombus->returnResult();

$trapezoid = new Trapezoid(5,8,9,5,6);
$trapezoid->returnResult();

$triangle = new Triangle(6,6,5,7);
$triangle->returnResult();
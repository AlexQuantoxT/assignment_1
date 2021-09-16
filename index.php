<?php
use classes\Circle;
use classes\Rectangle;
require "interfaces\Area_Perimeter.php";
require "autoload.php";

$circle = new Circle(5);
$circle->returnResult();

$rectangle = new Rectangle(5,4);
$rectangle->returnResult();
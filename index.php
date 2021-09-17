<?php
use classes\Circle;
use classes\Rectangle;
use classes\Rhombus;
use classes\Trapezoid;
use classes\Triangle;
use classes\Result;

spl_autoload_register();

$returnRes = new Result();

$circle = new Circle(5);
echo $returnRes->returnResult($circle);

$rectangle = new Rectangle(5,4);
echo $returnRes->returnResult($rectangle);

$rhombus = new Rhombus(4,5,8);
echo $returnRes->returnResult($rhombus);

$trapezoid = new Trapezoid(5,8,9,5,6);
echo $returnRes->returnResult($trapezoid);

$triangle = new Triangle(6,6,5,7);
echo $returnRes->returnResult($triangle);
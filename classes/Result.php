<?php
namespace classes;
use interfaces\AreaPerimetar;
class Result{
    public function returnResult(AreaPerimetar $geoType){
    echo "Area of the $geoType->name is: " . $geoType->area() . "\nPerimeter of the $geoType->name is: " . $geoType->perimeter() . "\n";
    }
}
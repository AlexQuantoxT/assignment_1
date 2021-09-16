<?php
namespace classes;

use interfaces\AreaPerimetar;
require "interfaces\Area_Perimeter.php";

class Circle implements AreaPerimetar{
    const PI = 3.14;
    public $r;
    public function __construct($r){
        $this->r = $r;
    }
    public function area(){
        return (self::PI * $this->r**2);
    }
    public function perimeter(){
        return (2 * self::PI * $this->r);
    }
    public function returnResult(){
        echo "Area of the circe is: " . $this->area() . "</br> 
              Perimeter of the circle is: " . $this->perimeter();
    }
}
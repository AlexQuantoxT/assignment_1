<?php
namespace classes;

use interfaces\AreaPerimetar;

class Rectangle implements AreaPerimetar{
    public $a;
    public $b;
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
    public function area(){
        return ($this->a * $this->b);
    }
    public function perimeter(){
        return (2*($this->a + $this->b));
    }
    public function returnResult(){
        echo "Area of the rectangle is: " . $this->area() . "</br> 
              Perimeter of the rectangle is: " . $this->perimeter() . "</br>";
    }
}
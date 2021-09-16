<?php
namespace classes;

use interfaces\AreaPerimetar;

class Triangle implements AreaPerimetar{
    public $a;
    public $b;
    public $c;
    public $ha;
    public function __construct($a,$b,$c,$ha){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->ha = $ha;
    }
    public function area(){
        return ($this->ha * $this->a) / 2;
    }
    public function perimeter(){
        return ($this->a + $this->b + $this->c);
    }
    public function returnResult(){
        echo "Area of the triangle is: " . $this->area() . "</br> 
              Perimeter of the triangle is: " . $this->perimeter() . "</br>";
    }
}

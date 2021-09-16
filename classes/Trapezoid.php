<?php
namespace classes;

use interfaces\AreaPerimetar;

class Trapezoid implements AreaPerimetar{
    public $a;
    public $b;
    public $c;
    public $d;
    public $h;
    public function __construct($a,$b,$c,$d,$h){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
        $this->h = $h;
    }
    public function area(){
        return ($this->a + $this->b) * $this->h / 2;
    }
    public function perimeter(){
        return ($this->a + $this->b + $this->c + $this->d);
    }
    public function returnResult(){
        echo "Area of the trapezoid is: " . $this->area() . "</br> 
              Perimeter of the trapezoid is: " . $this->perimeter() . "</br>";
    }
}

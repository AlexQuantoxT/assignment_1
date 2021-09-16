<?php
namespace classes;

use interfaces\AreaPerimetar;

class Rhombus implements AreaPerimetar{
    public $a;
    public $p;
    public $q;
    public function __construct($a,$p,$q){
        $this->a = $a;
        $this->p = $p;
        $this->q = $q;
    }
    public function area(){
        return ($this->p * $this->q) / 2;
    }
    public function perimeter(){
        return (4 * $this->a);
    }
    public function returnResult(){
        echo "Area of the rhombus is: " . $this->area() . "</br> 
              Perimeter of the rhombus is: " . $this->perimeter() . "</br>";
    }
}

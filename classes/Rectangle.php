<?php
namespace classes;

use interfaces\AreaPerimetar;

class Rectangle implements AreaPerimetar{
    public $name = 'rectangle';
    private $a;
    private $b;
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
}
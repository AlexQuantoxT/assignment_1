<?php
namespace classes;

use interfaces\AreaPerimetar;

class Trapezoid implements AreaPerimetar{
    public $name = 'trapezoid';
    private $a;
    private $b;
    private $c;
    private $d;
    private $h;
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
}

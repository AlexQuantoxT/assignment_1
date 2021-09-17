<?php
namespace classes;

use interfaces\AreaPerimetar;

class Triangle implements AreaPerimetar{
    public $name = 'triangle';
    private $a;
    private $b;
    private $c;
    private $ha;
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
}

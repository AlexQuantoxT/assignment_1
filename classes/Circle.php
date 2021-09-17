<?php
namespace classes;

use interfaces\AreaPerimetar;

class Circle implements AreaPerimetar{
    const PI = 3.14;
    public $name = 'circle';
    private $r;
    public function __construct($r){
        $this->r = $r;
    }
    public function area(){
        return (self::PI * $this->r**2);
    }
    public function perimeter(){
        return (2 * self::PI * $this->r);
    }
    static public function geGeotName(){
        return self::$name;
    }
}
<?php

abstract class Shape {
    public $color;

     public function __construct($c) {
        $this->color = $c;
    }

    abstract public function calculateArea();
} 

?>
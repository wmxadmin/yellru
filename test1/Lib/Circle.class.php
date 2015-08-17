<?php

namespace Shape;

class Circle extends Shape implements DrawingObject {
    private $radius = 10; // уникальный для фигуры параметр
    public function __construct($params) {
        parent::__construct($params);
        $this->radius = $params['radius'];
    }
    public function draw() {
        print "Circle\n".$this->radius;
    }
}
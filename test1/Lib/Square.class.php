<?php

namespace Shape;

class Square extends Shape implements DrawingObject {
    private $x = 10; // уникальный для фигуры параметр
    private $y = 15; // уникальный для фигуры параметр
    public function __construct($params) {
        parent::__construct($params);
        $this->x =  $this->params['x'];
        $this->y =  $this->params['y'];
    }
    public function draw() {
        print "Square\n".' x:'.$this->x.' y:'.$this->y;
    }
}
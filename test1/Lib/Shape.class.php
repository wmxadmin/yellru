<?php

namespace Shape;

abstract class Shape 
{ 
    // общие параметры фигур
    public $color = 'red';
    public $line = 'bold';
    
    public function __construct($params) {
        $this->setColor($params['color']);
        $this->setLine($params['line']);
    }
    
    public final function setColor($color) { 
        $this->color=$color;
    }
    public final function setLine($line) { 
        $this->line=$line;
    }
}
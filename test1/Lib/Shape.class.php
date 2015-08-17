<?php

namespace Shape;

abstract class Shape 
{ 
    // общие параметры фигур
    public $color = 'red';
    public $line = 'bold';
    
    public function __construct($params) {
    }
    
    public final function setColor($params) { 
        $this->color=$params['color'];
    }
    public final function setLine($params) { 
        $this->line=$params['line'];
    }
}
<?php

/*
 * 
 * В коде представлена только архитектура.
 * Описание и реализация некоторых методов, 
 * намеренно опускалась для экономии времени.
 * Например, проверки входных данных, рисования и т.п.
 * 
 * Потречено времени: 20 минут
 * 
 */

function ShapeFactoryMethod($type, $params) {
    switch ($type) {
        case 'circle': return new Circle($params);
        case 'square': return new Square($params);
    }
}

define('LIB_PATH', './Lib/');

spl_autoload_register( function ($sClass) {
    if(file_exists(LIB_PATH."{$sClass}.class.php")){
        if( !class_exists($sClass) ){
            require_once LIB_PATH."{$sClass}.class.php";
        }
    }
});

// $shapes = [ 
//    ['type' => 'circle', 'params' => [...]],
//    ['type' => 'circle', 'params' => [...]]
// ];

foreach ($shapes as $type => $params) {
    ShapeFactoryMethod($type, $params)->draw();
}

/*
 *  Ещё один из вариантов реализации
 *  
 *  abstract class ShapeFactory
 *
    {
            abstract function Create();
    }

    class SquareFactory extends ShapeFactory
    {
            function Create()
            {
                    return new Square();
            }
    }

    class CircleFactory extends ShapeFactory
    {
            function Create()
            {
                    return new Circle();
            }
    }

    $squareFactory = new SquareFactory();
    $circleFactory = new CircleFactory();

    $a_square = $squareFactory->Create();
    $a_circle = $circleFactory->Create();

    $a_square->Draw();
    echo "\n";
    $a_circle->Draw();
    echo "\n";
 * 
 */
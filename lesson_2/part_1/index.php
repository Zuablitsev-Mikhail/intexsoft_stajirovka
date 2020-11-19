<?php
    require 'vendor/autoload.php';

//    пример объявления двух экземпляров разных классов
    $engine = new \liw\app\Engine("1",1,1);
    $car = new \liw\app\Car("red", $engine, 2500); // класс, содержащий в себе другой класс
    print_r($car);
    echo "<br> \n";
    print_r($engine);


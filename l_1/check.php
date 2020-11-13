<?php
    function max_val(){
        $max = $_POST['numberA'];
        foreach ($_POST as $key){
            if($max < $key) $max = $key;
        }
        return $max;
    }
    function min_val(){
        $min = $_POST['numberA'];
        foreach ($_POST as $key){
            if($min > $key) $min = $key;
        }
        return $min;
    }
    function count_zero(){
        $i = 0;
        foreach ($_POST as $key){
            if($key == 0) $i++;
        }
        return $i;
    }
    function biggest_then($a){
        $i = 0;
        foreach ($_POST as $key){
            if($key > $a) $i++;
        }
        return $i;
    }
    function sum(){
        $sum = 0;
        foreach ($_POST as $key){
            $sum += $key;
        }
        return $sum;
    }
    function avg_c(){
        $sum = 0;
        foreach ($_POST as $key){
            $sum += $key;
        }
        return $sum/count($_POST);
    }
    function div_by($numb){
        $i = 0;
        foreach ($_POST as $key){
           if($key % $numb == 0) $i++;
        }
        return $i;
    }
    function div_by_two(){
        $i = 0;
        foreach ($_POST as $key){
            if($key % 2 == 0 && $key % 3 == 0) $i++;
        }
        return $i;
    }
    foreach ($_POST as $key){
        if($key == ""){
            header("LOCATION: index.php");
        }
    }

    print_r($_POST);
    echo "<br>max = ".max_val();
    echo "<br>min = ".min_val();
    echo "<br>count of '0' = ".count_zero();
    echo "<br>biggest then a = ".biggest_then(20);
    echo "<br>sum = ".sum();
    echo "<br>avg = ".avg_c();
    echo "<br>a%2 = ".div_by(2);
    echo "<br>a%3 = ".div_by(3);
    echo "<br>a%2 && a%3 = ".div_by_two();

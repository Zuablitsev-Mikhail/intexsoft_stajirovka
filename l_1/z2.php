<?php
function z2()
{
    $array = [[1,1,1,1],[2,2,2,2],[3,3,3,3],[4,4,4,4],[5,5,5,5]];
    for ($i = 0; $i < count($array); $i++){
        for ($j = 0; $j < count($array[0]); $j++){
            echo $array[$i][$j]." ";
        }
        echo "<br>";
    }
}
<?php
    function z1($array,$symbol){
        foreach ($array as $key){
            if(is_array($key)){
                z1($key,$symbol.$symbol[0]);
            }
            else{
                $result = $symbol.$key."<br>";
                $result = substr($result,1);
                echo $result;
            }
        }
    }
<?php

    //Normal Array
    $fruits = array("Apple", "Banana", "Coconut", "Dragon Fruit", "Eggplant");
    echo "There are " . count($fruits) . " Fruits in array <br> <br>" ;
    foreach ($fruits as $fruits) {
        echo $fruits . "<br>";
        
    }
    echo "<br>";

     //Associative Array

    $associativeArray = array("Mou dame gengkai, nani mo dekinai" => "Pagod na ako, di ko na kayang gumalaw", 
                                "Gohan taberu kiryoku mo nai" => "Wala na akong energy para kumain",
                                "Yaru koto nakunnata" => "Wala nang magawa");

    foreach($associativeArray as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    echo "<br>";

    $additional = array(
                    "Tabe houdai"=> "Buffet", 
                    "Byouhin" => "Hospital",
                    "Oisha san" => "Doctor");
    
    foreach($additional as $key => $value){
        echo "{$key} = {$value} <br>";
    }
?>


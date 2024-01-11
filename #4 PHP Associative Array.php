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

    
    $text = $additional [$_POST["text"]];

    echo $text;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action = "index.php" method = "post" >
        <br>
        <label>Enter </label>
        <input type="text" name ="text">
        <br>
        <input type="submit">
    </form>

</body>
</html>


<?php

    //PHP Variables

    $name = "Yuri Kun";

    $weight = 50;
    $float = 2.205;
    $lbs = $weight * $float;
   
    $calorieMaintenance = (int)$lbs * 12;
    $calorieDeficit = $calorieMaintenance - 500;

    echo "Hello {$name}, your weight is {$weight}kg <br>";
    echo "You are {$lbs} lbs <br>";
    echo "Your Calorie Maintenance is {$calorieMaintenance} <br>";
    echo "Target Calorie: {$calorieDeficit}";


?>





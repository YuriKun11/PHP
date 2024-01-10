<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorie Tracker</title>

</head>
<body>

    <h1>Calorie Tracker</h1>
    <form action="index.php" method = "get">
        <h2>
        <label>Weight: </label>
        <input type="text" name = "weight"></input>
        <input type="submit" value = "Calculate">
        </h2>
    </form>

</body>
</html>

<?php
    //$_GET and $_POST method 
    //To use post method, change the value of the method of a form element
    $weight = $_GET["weight"];
    $float = 2.205;
    $lbs = $weight * $float;
    $calorieDeficit = 500;
    $calorieMaintenance = (int)$lbs * 12;
    $targetCalorie = $calorieMaintenance - $calorieDeficit;

    echo "<h3>Weight: {$weight} kg <br>";
    echo "You are {$lbs} lbs <h3><br>";
    echo "Your Calorie Maintenance is {$calorieMaintenance} <br>";
    echo "Target Calorie: {$targetCalorie}";
?>




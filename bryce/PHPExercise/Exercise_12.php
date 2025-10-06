<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    echo "<h1>Travel Cost Estimator</h1>";

    $distance = 150;           
    $fuel_consumption = 12;    
    $fuel_price = 65;          


    $fuel_needed = $distance / $fuel_consumption;
    $travel_cost = $fuel_needed * $fuel_price;


    echo "Distance: " . $distance . " km<br><br>";
    echo "Fuel Consumption: " . $fuel_consumption . " km/l<br><br>";
    echo "Fuel Price: ₱" . $fuel_price . " per liter<br><br>";
    echo "Estimated Travel Cost: ₱" . round($travel_cost, 2);
?>


</body>
</html>
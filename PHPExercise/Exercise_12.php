<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Travel Cost Estimator</title>
</head>
<body>

<h1>Travel Cost Estimator</h1>

<form action="" method="POST">
  Distance (km): <input type="text" name="distance"><br><br>
  Fuel Consumption (km/l): <input type="text" name="fuel_consumption"><br><br>
  Fuel Price (₱ per liter): <input type="text" name="fuel_price"><br><br>
  <input type="submit" value="Estimate Cost">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $distance = htmlspecialchars($_POST["distance"]);
  $fuel_consumption = htmlspecialchars($_POST["fuel_consumption"]);
  $fuel_price = htmlspecialchars($_POST["fuel_price"]);

  if (is_numeric($distance) && is_numeric($fuel_consumption) && is_numeric($fuel_price) && $fuel_consumption > 0) {
    $fuel_needed = $distance / $fuel_consumption;
    $travel_cost = $fuel_needed * $fuel_price;

    echo "<h3>Output:</h3>";
    echo "Distance: $distance km<br><br>";
    echo "Fuel Consumption: $fuel_consumption km/l<br><br>";
    echo "Fuel Price: ₱$fuel_price per liter<br><br>";
    echo "Estimated Travel Cost: ₱" . round($travel_cost, 2);
  } else {
    echo "<p>Please enter valid numeric values. Fuel consumption must be greater than zero.</p>";
  }
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BMI Calculator</title>
</head>
<body>

<h1>BMI Calculator</h1>

<form action="" method="POST">
  Weight (kg): <input type="text" name="weight"><br><br>
  Height (m): <input type="text" name="height"><br><br>
  <input type="submit" value="Calculate BMI">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $weight = htmlspecialchars($_POST["weight"]);
  $height = htmlspecialchars($_POST["height"]);

  if (is_numeric($weight) && is_numeric($height) && $height > 0) {
    $bmi = $weight / ($height * $height);
    echo "<h3>Output:</h3>";
    echo "Weight: $weight kg<br><br>";
    echo "Height: $height m<br><br>";
    echo "BMI: " . round($bmi, 2);
  } else {
    echo "<p>Please enter valid numeric values for weight and height.</p>";
  }
}
?>

</body>
</html>

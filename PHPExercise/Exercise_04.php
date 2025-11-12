<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Temperature Converter</title>
</head>
<body>

<h1>Temperature Converter</h1>

<form action="" method="POST">
  Celsius: <input type="text" name="celsius"><br><br>
  <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $celsius = htmlspecialchars($_POST["celsius"]);

  if (is_numeric($celsius)) {
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<h3>Output:</h3>";
    echo "<p>Celsius: $celsius °C</p>";
    echo "<p>Fahrenheit: $fahrenheit °F</p>";
  } else {
    echo "<p>Please enter a valid number for Celsius.</p>";
  }
}
?>

</body>
</html>

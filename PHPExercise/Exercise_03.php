<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rectangle Calculator</title>
</head>
<body>

<h1>Area and Perimeter of a Rectangle</h1>

<form action="" method="POST">
  Length: <input type="text" name="length"><br><br>
  Width: <input type="text" name="width"><br><br>
  <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $length = htmlspecialchars($_POST["length"]);
  $width = htmlspecialchars($_POST["width"]);

  if (is_numeric($length) && is_numeric($width)) {
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "<h3>Output:</h3>";
    echo "<p>Length: $length</p>";
    echo "<p>Width: $width</p>";
    echo "<p>Area: $area</p>";
    echo "<p>Perimeter: $perimeter</p>";
  } else {
    echo "<p>Please enter valid numeric values for length and width.</p>";
  }
}
?>

</body>
</html>

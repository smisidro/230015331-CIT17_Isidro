<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Math</title>
</head>
<body>

<h2>Simple Math</h2>

<form action="" method="POST">
  First Number: <input type="text" name="num1"><br><br>
  Second Number: <input type="text" name="num2"><br><br>
  <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = htmlspecialchars($_POST["num1"]);
  $num2 = htmlspecialchars($_POST["num2"]);

  echo "<h3>Output:</h3>";
  echo "Numbers: <strong>$num1</strong> and <strong>$num2</strong><br>";
  echo "Sum: " . ($num1 + $num2) . "<br>";
  echo "Difference: " . ($num1 - $num2) . "<br>";
  echo "Product: " . ($num1 * $num2) . "<br>";
  echo "Quotient: " . ($num2 != 0 ? ($num1 / $num2) : "Undefined (division by zero)") . "<br>";
}
?>

</body>
</html>

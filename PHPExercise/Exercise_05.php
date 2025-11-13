<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Swapping Variables</title>
</head>
<body>

<h1>Swapping Variables</h1>

<form action="" method="POST">
  Value of x: <input type="text" name="x"><br><br>
  Value of y: <input type="text" name="y"><br><br>
  <input type="submit" value="Swap">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $x = htmlspecialchars($_POST["x"]);
  $y = htmlspecialchars($_POST["y"]);

  echo "<h3>Before Swap</h3>";
  echo "<p>x = $x</p>";
  echo "<p>y = $y</p>";

  $temp = $x;
  $x = $y;
  $y = $temp;

  echo "<h3>After Swap</h3>";
  echo "<p>x = $x</p>";
  echo "<p>y = $y</p>";
}
?>

</body>
</html>

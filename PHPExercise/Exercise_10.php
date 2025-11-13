<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Grading System</title>
</head>
<body>

<h1>Simple Grading System</h1>

<form action="" method="POST">
  Math: <input type="text" name="math"><br><br>
  English: <input type="text" name="english"><br><br>
  Science: <input type="text" name="science"><br><br>
  <input type="submit" value="Calculate Grade">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $math = htmlspecialchars($_POST["math"]);
  $english = htmlspecialchars($_POST["english"]);
  $science = htmlspecialchars($_POST["science"]);

  if (is_numeric($math) && is_numeric($english) && is_numeric($science)) {
    $average = ($math + $english + $science) / 3;

    if ($average >= 90) {
      $grade = "A";
    } elseif ($average >= 80) {
      $grade = "B";
    } elseif ($average >= 70) {
      $grade = "C";
    } elseif ($average >= 60) {
      $grade = "D";
    } else {
      $grade = "F";
    }

    echo "<h3>Output:</h3>";
    echo "Math: $math<br><br>";
    echo "English: $english<br><br>";
    echo "Science: $science<br><br>";
    echo "Average: " . round($average, 2) . "<br><br>";
    echo "Grade: $grade";
  } else {
    echo "<p>Please enter valid numeric grades for all subjects.</p>";
  }
}
?>

</body>
</html>

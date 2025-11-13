<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Salary Calculator</title>
</head>
<body>

<h1>Salary Calculator</h1>

<form action="" method="POST">
  Basic Salary: <input type="text" name="basic_salary"><br><br>
  Allowance: <input type="text" name="allowance"><br><br>
  Deduction: <input type="text" name="deduction"><br><br>
  <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $basic_salary = htmlspecialchars($_POST["basic_salary"]);
  $allowance = htmlspecialchars($_POST["allowance"]);
  $deduction = htmlspecialchars($_POST["deduction"]);

  if (is_numeric($basic_salary) && is_numeric($allowance) && is_numeric($deduction)) {
    $net_salary = $basic_salary + $allowance - $deduction;

    echo "<h3>Output:</h3>";
    echo "Basic Salary: ₱ $basic_salary<br><br>";
    echo "Allowance: ₱ $allowance<br><br>";
    echo "Deduction: ₱ $deduction<br><br>";
    echo "Net Salary: ₱ $net_salary";
  } else {
    echo "<p>Please enter valid numeric values for all fields.</p>";
  }
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Salary Calculator</h1>";
    $basic_salary = 30000 ;
    $allowance = 10000 ;
    $deduction = 5000 ;

    $net_salary = $basic_salary + $allowance - $deduction;
    
    echo "Basic Salary: ₱ $basic_salary <br><br>";
    echo "Allowance: ₱  $allowance <br><br>";
    echo "Deduction: ₱ $deduction<br><br>";
    echo "Net Salary: ₱  $net_salary";
    ?>
</body>
</html>
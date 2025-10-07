<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<h1>Bank Account Simulation</h1>";
    $balance = 10000;
    $deposit =3000;
    $withdraw = 1500;

    $balance = $balance + $deposit - $withdraw;

    echo "Initial Balance: ₱10000<br><br>";
    echo "Deposit: ₱" . $deposit . "<br><br>";
    echo "Withdraw: ₱" . $withdraw . "<br><br>";
    echo "Updated Balance: ₱" . $balance;
    ?>
</body>
</html>
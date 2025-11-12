<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bank Account Simulation</title>
</head>
<body>

<h1>Bank Account Simulation</h1>

<form action="" method="POST">
  Initial Balance: <input type="text" name="balance"><br><br>
  Deposit Amount: <input type="text" name="deposit"><br><br>
  Withdrawal Amount: <input type="text" name="withdraw"><br><br>
  <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $balance = htmlspecialchars($_POST["balance"]);
  $deposit = htmlspecialchars($_POST["deposit"]);
  $withdraw = htmlspecialchars($_POST["withdraw"]);

  if (is_numeric($balance) && is_numeric($deposit) && is_numeric($withdraw)) {
    $updated_balance = $balance + $deposit - $withdraw;

    echo "<h3>Output:</h3>";
    echo "Initial Balance: ₱$balance<br><br>";
    echo "Deposit: ₱$deposit<br><br>";
    echo "Withdraw: ₱$withdraw<br><br>";
    echo "Updated Balance: ₱$updated_balance";
  } else {
    echo "<p>Please enter valid numeric values for all fields.</p>";
  }
}
?>

</body>
</html>

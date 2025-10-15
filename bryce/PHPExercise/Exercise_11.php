<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Currency Converter</title>
</head>
<body>

<h1>Currency Converter</h1>

<form action="" method="POST">
  Amount in PHP: <input type="text" name="amount_php"><br><br>
  <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $amount_php = htmlspecialchars($_POST["amount_php"]);

  if (is_numeric($amount_php)) {
    $rate_usd = 0.018;
    $rate_eur = 0.017;
    $rate_jpy = 2.65;

    $amount_usd = $amount_php * $rate_usd;
    $amount_eur = $amount_php * $rate_eur;
    $amount_jpy = $amount_php * $rate_jpy;

    echo "<h3>Converted Amounts:</h3>";
    echo "Amount in PHP: ₱ $amount_php<br><br>";
    echo "Converted to USD: $ " . round($amount_usd, 2) . "<br><br>";
    echo "Converted to EUR: € " . round($amount_eur, 2) . "<br><br>";
    echo "Converted to JPY: ¥ " . round($amount_jpy, 2);
  } else {
    echo "<p>Please enter a valid numeric amount in PHP.</p>";
  }
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<h1>Currency Converter</h1>";
    
    $amount_php = 1000;


    $rate_usd = 0.018;   
    $rate_eur = 0.017;   
    $rate_jpy = 2.65;    


    $amount_usd = $amount_php * $rate_usd;
    $amount_eur = $amount_php * $rate_eur;
    $amount_jpy = $amount_php * $rate_jpy;


    echo "Amount in PHP: ₱  $amount_php <br><br>";
    echo "Converted to USD: $ $amount_usd <br><br>";
    echo "Converted to EUR: € $amount_eur <br><br>";
    echo "Converted to JPY: ¥ $amount_jpy";
    ?>
</body>
</html>
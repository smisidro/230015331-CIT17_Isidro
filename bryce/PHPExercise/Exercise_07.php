<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>BMI Calculator</h1>";
    $weight = 80;
    $height = 1.65 ;

    $bmi = $weight /($height * $height);

    echo "Weight: $weight kg <br><br>";
    echo "Height: $height m <br><br>";
    echo "BMI: $bmi";
    

    ?>

</body>
</html>
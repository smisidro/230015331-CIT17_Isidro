<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1> Swapping Variables</h1>";
    $x = 5 ;
    $y = 10;

    echo "<h3>Before Swap<br></h3>";
    echo "<p> x = $x </p>";
    echo "<p> y = $y </p>";

    $temp = $x;
    $x= $y;
    $y = $temp;

    echo "<h3>After Swap<br></h3>";
    echo "<p> x = $x </p>";
    echo "<p> y = $y </p>";
    ?>
</body>
</html>
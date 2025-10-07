<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1> Area and Perimeter of a Rectangle</h1>";
    $length = 12 ;
    $width = 8;

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "<p>Length: $length</p>";
    echo "<p>Width: $width</p>";
    echo "<p>Area: $area</p>";
    echo "<p>Perimeter: $perimeter</p>";

    ?>
</body>
</html>
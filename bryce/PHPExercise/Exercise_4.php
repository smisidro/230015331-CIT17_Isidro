<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Temperature Converter</h1>";
    $celsius = 30 ;

    $fahrenheit = ($celsius * 9/5) + 32 ;

    echo "<p>Celsius : $celsius °C </p>";
    echo "<p>Fahrenheit: $fahrenheit °F</p>";
    ?>
</body>
</html>
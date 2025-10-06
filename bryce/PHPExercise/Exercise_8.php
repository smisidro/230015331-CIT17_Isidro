<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>String Manipulation</h1>";
    $sentence = "Learning PHP is fun and useful haha.";
    echo "<h3>Sentence: $sentence<br><br></h3>";

    echo "Number of characters: " . strlen($sentence) . "<br><br>";
    echo "Number of words: " . str_word_count($sentence) . "<br><br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br><br>";
    echo "Lowercase: " . strtolower($sentence) . "<br><br>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>String Manipulation</title>
</head>
<body>

<h1>String Manipulation</h1>

<form action="" method="POST">
  Enter a sentence: <input type="text" name="sentence"><br><br>
  <input type="submit" value="Analyze">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sentence = htmlspecialchars($_POST["sentence"]);

  echo "<h3>Sentence: $sentence</h3><br>";
  echo "Number of characters: " . strlen($sentence) . "<br><br>";
  echo "Number of words: " . str_word_count($sentence) . "<br><br>";
  echo "Uppercase: " . strtoupper($sentence) . "<br><br>";
  echo "Lowercase: " . strtolower($sentence) . "<br><br>";
}
?>

</body>
</html>

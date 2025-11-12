<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Form Handling</title>
</head>
<body>

<h2>Introduce Yourself</h2>

<form action="" method="POST">
  Name: <input type="text" name="name"><br><br>
  Age: <input type="text" name="age"><br><br>
  Favorite Color: <input type="text" name="favorite_color"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $age = htmlspecialchars($_POST["age"]);
  $favorite_color = htmlspecialchars($_POST["favorite_color"]);

  echo "<h3>Output:</h3>";
  echo "Hi, I'm <strong>$name</strong>, I am <strong>$age</strong> years old, and my favorite color is <strong>$favorite_color</strong>.";
}
?>

</body>
</html>

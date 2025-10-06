<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>Simple Grading System</h1>";

$math = 95;
$english = 90;
$science = 88;

$average = ($math + $english + $science) / 3;


if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}


echo "Math: $math<br><br>";
echo "English: $english<br><br>";
echo "Science: $science<br><br>";
echo "Average: $average <br><br>";
echo "Grade: $grade";
?>

</body>
</html>
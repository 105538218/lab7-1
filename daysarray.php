<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables, Arrays and Operators</title>
</head>
<body>
    <h2>PHP Variables, Arrays and Operators</h2>
<?php
$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
echo "<p>The days of the week in English are:</p>";
echo "<p>" . implode(", ", $days) . ".</p>";

$days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
echo "<p>The days of the week in French are:</p>";
echo "<p>" . implode(", ", $days) . ".</p>";
?>
</body>
</html>
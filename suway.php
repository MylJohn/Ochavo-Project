<!DOCTYPE html>
<head></head>
 
<body>
<?php
$number = 7; // The number for which you want to generate the multiplication table

echo "<h2>Multiplication Table for $number</h2>";

echo "<table>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>$number x $i</td>";
    echo "<td>=</td>";
    echo "<td>" . ($number * $i) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>



</body>
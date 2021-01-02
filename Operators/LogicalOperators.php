<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
    <style>
        *{color:blue;}
        h2{color:red;}
    </style>
</head>
<body>
<h2>Logical Operators</h2>
<?php

/*

----------------------------------------------------
    AND (*)                 OR (+)          NOT
    A   B   O/P         A   B   O/P
    1   1    1          1   1    1          1       0
    1   0    0          1   0    0          0       1
    0   1    0          0   1    1
    0   0    0          0   0    0
    ----------------------------------------------------
    1 - True
    0 - False

*/

$a=10;
$b=20;

if ($a <= $b){echo "True";} else { echo "Flase";}
echo "<br>";
if ( $a >= $b) {echo "True";} else { echo "Flase";}
echo "<br>";
if ($a < $b && $a != $b) {echo "True";} else { echo "Flase";}
echo "<br>";
if ($a < $b && $a == $b) {echo "True";} else { echo "Flase";}
echo "<br>";
if ($a < $b || $a == $b) {echo "True";} else { echo "Flase";}
echo "<br>";


?>
</body>
</html>
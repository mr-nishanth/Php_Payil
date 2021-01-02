<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Operators</title>
    <style>
        *{color:blue;}
        h2{color:red;}
    </style>
</head>
<body>
<h2>Assignment Operators</h2>
<?php
// ( = ) assign the value of the right operand to its left operand
    $x=20;
    $y=$x;
    echo "X value : ",$x."<br>";
    echo "Y value : ",$y."<br>";
    $x = $x + 10;
    echo "X value after adding : ",$x ."<br>";
    echo "Y value : ",$y ."<br>";

    $x +=10;
    echo "X value after adding via ShortHand Operator: ",$x ."<br>";
    $x *=10;
    echo "X value after Mulitple via ShortHand Operator: ",$x ."<br>";
    $x /=10;
    echo "X value after Divided via ShortHand Operator: ",$x ."<br>";
    $x %=3;
    echo "X value after Mod via ShortHand Operator: ",$x ."<br>";
?>
</body>
</html>
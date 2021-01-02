<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incerement and Decrement Operators</title>
    <style>
        *{color:blue;}
        h2{color:red;}
    </style>
</head>
<body>
<h2>Incerement and Decrement Operators</h2>
<?php
$x = 10;
echo $x ."<br>";
echo "Post Increment and Decremnt "."<br>";
echo $x++;
echo "Increment",$x ."<br>";
echo $x--;
echo "Decrement",$x ."<br>";

echo "Pre Increment and Decrement"."<br>";
echo ++$x;
echo "Increment",$x ."<br>";
echo --$x;
echo "Decrement",$x ."<br>";

?>
</body>
</html>
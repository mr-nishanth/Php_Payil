<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While - Loop</title>
</head>
<body>
    <h2>Do While Loop</h2>

    <form action="DoWhile.php" method="post">
        <label for="x">Start</label>
        <input type="text" id="x" name="X">
        <label for="y">End</label>
        <input type="text" id="y" name="Y">
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php

    $num1=0;
    while($num1 < 10){
        echo  $num1 , "   Cyber" . "<br>" ;
        $num1 ++;
}
echo "<br>";

echo "Do While Loop"."<br>";
$num2=1;
do{
    echo $num2."<br>";
    $num2++;
}while( $num2 > 5 );

    ?>

</body>
</html>
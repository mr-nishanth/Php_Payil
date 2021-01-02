<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break and Countinue- Loop</title>
</head>
<body>
    <h2>Do While Loop</h2>

    <form action="BreakAndCount.php" method="post">
        <label for="x">Start</label>
        <input type="text" id="x" name="X">
        <label for="y">End</label>
        <input type="text" id="y" name="Y">
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php

echo "<br>";

echo "Break And Continue While Loop"."<br>";
$num2=1;

while( $num2 <= 10 ){
    echo $num2."<br>";
    $num2++;
    if ($num2 == 5)
    {
        // echo "There this loop stop";
        // break;?
        continue;
    }


}

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For - Loop</title>
</head>
<body>
    <h2>For Loop</h2>

    <form action="For.php" method="post">
        <label for="x">Start</label>
        <input type="text" id="x" name="X">
        <label for="y">End</label>
        <input type="text" id="y" name="Y">
        <input type="submit" value="Submit">
    </form>
    <?php

if(!empty($_REQUEST)){
    $Start = $_REQUEST['X'];
    $End = $_REQUEST['Y'];
    echo "Start : ",$Start; echo "<br>";
    echo "End : ",$End; echo "<br>";

    echo " For Loop Starting ";  echo "<br>";
    for ($Start;$Start<=$End;$Start++){
        echo $Start;
        echo "<br>";
        
    }
}

    ?>

</body>
</html>
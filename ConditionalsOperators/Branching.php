<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <h2>If Statement</h2>
    <form action="Branching.php" method="post">
        <label for="x">Data : </label>
        <input type="text" id="x" name="X">
        <input type="submit" value="Submit">
</form>

<?php
    if(!empty($_REQUEST)){
        $DATA_1 = $_REQUEST['X'];
        if ($DATA_1 > 0){ echo $DATA_1;}
        echo "<br>";
        if ($DATA_1 > 10) { echo $DATA_1;}
        else { echo "Sorry! Buddy";}
    }

?>

</body>
</html>
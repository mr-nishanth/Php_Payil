<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else if</title>
</head>
<body>
    <h2> Nested else if Statement</h2>
    <form action="NestedElseIf.php" method="post">
        <label for="x">Enter Salary</label>
        <input type="text" id="x" name="X">
        <input type="submit" value="Submit">
</form>

<?php
    if(!empty($_REQUEST)){
        $DATA_1 = $_REQUEST['X'];
        if ($DATA_1 > 0 && $DATA_1 <=1000){
            echo $DATA_1 + 100;
        }
        else if ($DATA_1 > 1000 && $DATA_1 <= 5000) {
        echo $DATA_1 + 200;
        }
        else if ($DATA_1 > 5000 && $DATA_1 <= 10000){
            echo $DATA_1 + 300;
        }
        else { echo $DATA_1 + 500;}

    }

?>

</body>
</html>
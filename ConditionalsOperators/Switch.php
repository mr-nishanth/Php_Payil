<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <h2> Switch Case Statement</h2>
    <form action="Switch.php" method="post">
        <label for="x">Enter 1 - 5 In Number</label>
        <input type="text" id="x" name="X">
        <input type="submit" value="Submit">
</form>

<?php
    if(!empty($_REQUEST)){
        $DATA_1 = $_REQUEST['X'];
        // Single Statement
        switch($DATA_1 ){
            case 1:echo "One";break;
            case 2: echo "Two"; break;
            case 3: echo "Three"; break;
            case 4: echo "Four"; break;
            case 5: echo "Five"; break;

            // Multiple case statment
            case 6:
            case 8:
            case 10:
                echo "Even";
                break;
            case 7:
            case 9:
            case 11:
                echo "Odd";
                break;

                default: echo "Please Enter below 12"; break;
        }
    }
?>

</body>
</html>
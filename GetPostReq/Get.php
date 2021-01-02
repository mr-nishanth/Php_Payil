<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post Request</title>
</head>
<body>
    <h2>Get , Post , Request</h2>
    <form action="GetPostRequest.php" method="get">
        Data 1: <input type="text" name="x">
        Data 2: <input type="text" name="y">
            <input type="submit" value="test" name="Submit" >
    </form>
<br><br>
    <?php

    // $_GET is default array variable for get method

    // print_r = Print Read - it's return the datatype and values
    print_r($_GET);
echo "<br>";

    if (!empty ($_GET)){
        echo $_GET['x'] , " ",$_GET['y'], " ", $_GET['Submit'];
    }

    ?>
</body>
</html>
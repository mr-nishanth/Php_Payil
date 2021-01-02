<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - Loop</title>
</head>
<body>
    <h2>While Loop</h2>

    <form action="While.php" method="post">
        <label for="x">Start</label>
        <input type="text" id="x" name="X">
        <label for="y">End</label>
        <input type="text" id="y" name="Y">
        <input type="submit" value="Submit">
    </form>
    <?php


    $num=123456;
    while($num>=1){
        // Seperate didgit from given number
        $rem = $num%10;
        echo $rem."<br>";
        $num=$num/10;


}

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method in PHP</title>
</head>
<body>
    <h2>Post Method</h2>
    <form action="Post.php" method="post" >  <br>
    <label for="x">Data_1 : </label> <br>
    <input type="text " id="x" name="X_DATA"> <br>
    <label for="y">Data_2 : </label> <br>
    <input type="text" id="y" name="Y_DATA"> <br>
    <input type="submit" name="Submit" Values="Test"> <br>
    </form>
    <br><br><br>
    <?php

    print_r($_POST);

    if (!empty($_POST['Submit'])) {

        echo "<br>", $_POST['X_DATA'] , "<br>" , $_POST['Y_DATA'];
    }
    ?>

</body>
</html>
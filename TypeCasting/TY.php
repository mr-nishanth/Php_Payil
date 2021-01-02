<style>
    h2{color:red;}
    *{color:blue;}

</style>
<h2>TypeCasting</h2>
<?php

    $x=7/3;
    echo $x."<br>";

    // gettype function is get the data-type
    echo gettype($x)."<br><hr>";

    $x=round(7/3);
    echo $x."<br>";
    echo gettype($x)."<br><hr>";

    $d = 97.95;
    echo $d."<br>";
    echo gettype($d)."<br><hr>";

    $i = 9;
    echo $i."<br>";
    echo gettype($i)."<br><hr>";

    $a=$i+$d;
    echo $a;
    echo gettype($a);
    echo "<br><hr>";
    $a=$i+(int)$d;
    echo $a;
    echo gettype($a);
    echo "<br><hr>";


    $value = "5";
    echo $value;
    echo gettype($value);
    echo "<br><hr>";

    $value2 = "5" + "5";
    echo $value2;
    echo gettype($value2);
    echo "<br><hr>";

    $value3 = "5" . "5"; //  ( . ) Concatenation
    echo $value3;
    echo gettype($value3);
    echo "<br><hr>";






?>
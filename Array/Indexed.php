<style>
    *{color:blue;}
    h2{color:red;background-color:black;padding: 5px;}
</style>

<h2>Indexed Array</h2>
<?php

$mark = array(12,40.5,30,50,65);

print_r($mark);
echo "<br><hr>";


// var_dump funtion display the full array with data-type , value and return the length of array
var_dump($mark);
echo "<br><hr>";

// count function return the elements length
$length = count($mark);
echo $length;
echo "<br><hr>";

echo $mark[1];
echo "<br><hr>";


for ($i=0;$i < $length;$i++){
    echo $mark[$i];
    echo "<br>";
}

?>
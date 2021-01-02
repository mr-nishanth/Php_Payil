<style>
    *{color:blue;}
    h2{color:greenyellow;background-color: black;padding:5px}
</style>

<h2>Array Sorting</h2>

<?php

$x = array("C","A","D","B");
// Sorting
echo "Sorting";
sort($x);
print_r($x);

// reverse Sorting
rsort($x);
echo "<br><hr>";
print_r($x);
echo "<br><hr>";
$info = array("name"=>"anbu","mob"=>"nokia","area"=>"chennai");

sort($info);
print_r ($info);
echo "<br><hr>";
echo "<h3>Sort only take values not keys</h3>";
echo "<br><hr>";

// Sorting in value based and asce order
asort($info);
print_r ($info);
echo "<br><hr>";


?>
<style>
    *{color:blue;}
    h2{color:greenyellow;background-color: black;padding:5px}
</style>

<h2>Array  A-Sorting</h2>

<?php

$info = array("name"=>"anbu","mob"=>"nokia","area"=>"chennai");
// Sorting in value based and asce order or Sorting asc by values
echo "<br><hr>";
asort($info);
print_r ($info);
echo "<br><hr>";

// Sorting asc by values and reverse
arsort($info);
print_r ($info);
echo "<br><hr>";

// Sorting asc by key
ksort($info);
print_r ($info);
echo "<br><hr>";

// Sorting asc by values and reverse
krsort($info);
print_r ($info);
echo "<br><hr>";


?>
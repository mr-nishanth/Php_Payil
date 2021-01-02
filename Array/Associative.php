<style>
    *{color:blue;}
    h2{color:red;background-color:black;padding: 5px;}
</style>

<h2>Associative Array</h2>
<?php

// Associative array is key value pairs
$Info = array("name"=>"Nisha","age"=>21,"mobile"=>987);

print_r($Info);
echo "<br><hr>";


// var_dump funtion display the full array with data-type , value and return the length of array
var_dump($Info);
echo "<br><hr>";

// count function return the elements length
$length = count($Info);
echo $length;
echo "<br><hr>";

echo $Info['age'];
echo "<br><hr>";
echo $Info['mobile'];
echo "<br><hr>";
echo $Info['name'];
echo "<br><hr>";

var_dump($Info);
echo "<br><hr>";
echo "<h3>foreach advance loop is used for key mapping</h3>";
echo "<br><hr>";

echo "Values";
foreach($Info as $values){
    echo $values."<br>";
}

echo "<br><hr>";

echo "Keys";
foreach(array_keys($Info) as $keys){
    echo $keys."<br>";
}
echo "<br><hr>";

?>
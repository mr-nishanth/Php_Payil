<style>
    *{color:blue;}
    h2{color:green;background-color:black;padding:5px;}
</style>

<h2>Multidimensional Array</h2>

<?php

    $x = array(
        array("A","B","C","D"),
        array("P","Q","R","S"),
        array("W","X","Y","Z"),
    );

    echo "<br><hr>";
    echo count($x); // return total rows
    echo "<br><hr>";
    echo count($x[0]); // return 0th rows
    echo "<br><hr>";

    echo var_dump($x);

    echo "<br><hr>";

    for($i=0; $i < count($x); $i++){
        echo "<br>";
        for($j=0; $j < count($x[$i]); $j++){
            // echo "<br>";
            echo $x[$i][$j];
        }
    }

    echo "<br><hr>";
    echo "<br><hr>";

    $info = array(
        array("name"=>"anbu","mob"=>9876,"sal"=>20000),
        array("name"=>"mani","mob"=>8956,"sal"=>25000),
        array("name"=>"ravi","mob"=>7643,"sal"=>30000),
    );


var_dump($info);
echo "<br><hr>";
foreach($info as $index){
    echo "<br>";
    foreach($index as $value){
        echo $value;
    }

}
echo "<br><hr>";

foreach( $info as $index){
    echo "<br>";
    foreach(array_keys($index) as $keys){
        echo $keys;
    }

}
echo "<br><hr>";

?>
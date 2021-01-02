?<?php
    # Comments , print ,echo, printf , sscanf
    // Single-line Comment
    /*
    Mulit-line comment
    */

    $x=10;
    $y=20;
    print $x; // print handle one args

    // print $x,$y; Parse error: syntax error, unexpected

    echo "\n";
    echo $x,$y;
    echo "\n";
    $name="Cyber";
    printf("%s has %d rupees",$name,$x); //pharesing

    echo "\n";

    $data = "Cyber has 10 point";
    sscanf($data,"%s has %d point",$Name,$score);
    echo "\n";
    echo $name,$score;



?>
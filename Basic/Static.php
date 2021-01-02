<?php

    $ticket_count = 100;
    echo $ticket_count;

    $ticket_count = 80;
    echo $ticket_count;

    echo "<br>";
    static $ticket_count = 100;
    echo $ticket_count;

    static $ticket_count = 80;
    echo $ticket_count;


?>
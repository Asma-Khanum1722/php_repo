<?php
    echo '<h2>Loops in PHP</h2>';

    // while loop
    // print numbers from 1-10
    $count = 1;
    while ($count <= 10){
        echo "  $count";
        $count++;
    }
    echo "<br>";

    // do-while
    // do-while loop will execute code at least once before evaluating the equation
    // print numbers from 1-5
    $num = 1;
    do{
        echo " $num";
        $num++;
    }while($num <= 5);
    echo "<br>";

    // for loop
    // count to 100 by 10

    for ( $i = 0 ; $i <= 100 ; $i = $i + 10){
        echo " $i";
    }
    echo "<br>";
?>
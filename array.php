<?php
    echo "<h2> Arrays in PHP </h2>";

    // Creating an array
    $cars = array("Ford", "Tesla", "Audi", "Volvo");
    // (OR) $cars = ["Ford", "Tesla", "Audi", "Volvo"];

    // echo "$cars[0], ";
    // echo "$cars[1], ";
    // echo "$cars[2], ";
    // echo "$cars[3] ";
   
    // printing an array using loop
    echo "Printing array using loop: <br>";

    $size = count($cars);   //count() is an build-in function to get the size of an array

    for ( $i = 0 ; $i < $size ; $i++ ){
        echo "$cars[$i] <br>";
    }

     




?>
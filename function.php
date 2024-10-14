<?php
    echo "<h2> Function in PHP </h2>";

    function demo(){
        echo "Hello World! <br>";
        
    }
    // you have to call a function to make it work
    demo();

    // ARGUMENTS in a Function
    // we can add as many arg we want, just separate them with a comma

    function Name($studentName){
        echo "My name is $studentName. <br>";  
    }

    Name("Noor");

    // Multiple Arguments
    function siblings($name,$year){
        echo "$name, borned in $year. <br>";
    }

    siblings("Hamza",2000);
    siblings("Laiba",2002);
    siblings("Asma",2004);

    // find the sum of two numbers
    // returning a value

    function sum($x, $y){
        $z = $x + $y;
        return $z;
    }

    echo sum(3,4);

    // no of arguments of a function can be variable 
    // ...arg
    
?>
<?php
    echo "<h1>Operators In PHP</h1>";

    // <------- ARITHMETIC OPERATORS -------> //
    $w = 7;
    $x = 3;
    $y = 4;
    $z = "7";

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    echo $x ** $y;
    echo "<br>";

    // <------- COMPARISON OPERATORS -------> //
    // value is always returned in form of TRUE and FALSE

    var_dump($x == $y);
    echo "<br>";

    // Strict and Loose Equality
    var_dump($w == $z);
    echo "<br>";
    var_dump($w === $z);
    echo "<br>";

    // <------- LOGICAL OPERATORS -------> //
    // value is always returned in form of TRUE and FALSE

    // concept of truthy and falsey values 


?>
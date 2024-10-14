<?php
    echo '<h1>String in PHP</h1>';

    $str1 = 'Donna';
    $str2 = 'Jade';
    $statement = 'ahh PHP is no fun';

    // double qoute (Literals) : Preserve the value or return the value of var if any.
    echo "Hello $str1 and $str2";
    echo '<br>';

    // single qoute : Just Display, Value neither preserved nor returned.
    echo 'Hello $str1 and $str2';
    echo '<br>';


    // strlen() : string length, count no. of letters
    echo strlen($str1);
    echo '<br>';

    // str_word_count() : count the no. of words in string
    echo str_word_count($statement);
    echo '<br>';

    // strpos(): search for a word from a string
    // it returns the index of the desired/searched word
    echo strpos($statement, 'fun');
    echo '<br>';

    // <------- MODIFY STRING -------> //

    // 1. strtoupper() : UPPERCASE
    echo strtoupper($str1);
    echo '<br>';

    // 2. strtolower() : lowercase
    echo strtolower($str2);
    echo '<br>';

    // 3. str_replace() : PHP is repalced by Reading in statement variable.
    echo str_replace('PHP','Reading',$statement);
    echo '<br>';

    // 4. strrev() : Reverse the string
    echo strrev($str1);
    echo '<br>';

    // 5. explode() : used to convert a string into an array
    //--> " " is mandatory in explode()
    $x = 'Hello Hi Ciao World!';
    $y = explode(" ", $x);    //" " identifies the spaces between the string

    print_r($y);
    echo '<br>';

    // <------- CONCATENATION STRING -------> //
    // use dot operator to concatenate string*(the only easiest thing to do)

    $var1 = "Hello";
    $var2 = "World";
    // $z = $var1 . $var2;
    $z = $var1 ." ". $var2;
    echo $z;
    echo '<br>';


    // <------- SLICING STRING -------> //
    /*substr() : return a range of characters
    -->takes three attributes:  
        1.first the string,
        2.second the starting index,
        3.third is the no. of character you want to return. 
    */
    $sliceIT = "Winter is Coming! Northerners";
    echo substr($sliceIT, 18, 11);   
    echo '<br>';








?>
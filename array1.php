<?php
    echo "<h1>Assignment 02</h1>";
    echo "<h3>Printing First fifteen roll numbers:</h3><br>";
    // decalaring an array
    $rollNumber = array("BSCS51F22<strong>S001</strong>", 
                        "BSCS51F22<strong>S002</strong>", 
                        "BSCS51F22<strong>S003</strong>", 
                        "BSCS51F22<strong>S004</strong>", 
                        "BSCS51F22<strong>S005</strong>", 
                        "BSCS51F22<strong>S006</strong>", 
                        "BSCS51F22<strong>S007</strong>", 
                        "BSCS51F22<strong>S008</strong>", 
                        "BSCS51F22<strong>S009</strong>", 
                        "BSCS51F22<strong>S010</strong>", 
                        "BSCS51F22<strong>S011</strong>", 
                        "BSCS51F22<strong>S012</strong>", 
                        "BSCS51F22<strong>S013</strong>", 
                        "BSCS51F22<strong>S014</strong>", 
                        "BSCS51F22<strong>S015</strong>");

    // function to display my array
    function displayArray($rollNumber){
        $size = count($rollNumber);

        for ( $i = 0 ; $i < $size ; $i++ ){
            echo "$rollNumber[$i] <br>";
        }
    }

    displayArray($rollNumber);

?>

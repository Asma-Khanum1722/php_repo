<?php
    echo "<h2>Conditionals in PHP</h2>";

    
    // if statement
    $age1 = 20;
    if($age1 >= 18){
        echo "You can vote!";
    }

    echo "<br>";

    // if...else statement
    $age2 = 20;
    if($age2 < 18){
        echo "Back off you can't vote!";
    }
    else{
        echo "Go ahead and vote!";
    }
    echo "<br>";

    // Check if $a is either 2, 3, 4, 5, 6, or 7
    $a = 1;
    if($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7){
        echo "The number is between 2 & 7";
    }
    else{
        echo "The number is not between 2 & 7";
    }
    echo "<br>";

    // Write a PHP script that checks if a number is positive, negative,
    //  or zero and prints a message accordingly.
    $num = -10;
    if ($num > 0){
        echo "number is positive";
    }else if ($num < 0){
        echo "number is negative";
    }else{
        echo "number is ZERO!";
    }
    echo "<br>";

    // Create a PHP script that checks if a given number is even or odd.
    $num1 = 10;
    if($num1 % 2 == 0){
        echo "number is even";
    }else{
        echo "number is odd";
    }
    echo "<br>";

    /*
    Write a PHP script that checks if a student has passed, failed, or achieved distinction based on their marks:
    Marks > 75: Distinction
    Marks between 50 and 75: Pass
    Marks < 50: Fail
    */

    $marks = 76;

    if ($marks < 50){
        echo "You are a failure";
    }else if($marks > 75){
        echo "Bravo Kid!";
    }else{
        echo"You just passed!";
    }
    echo "<br>";

    // Use a ternary operator to check if a person is eligible to vote (age 18 or above) and display a message.
    $Age = 15;
    echo $Age >= 18 ? "You are eligible to vote." : "not eligible";

    echo "<br>";


    // Write a PHP script to check if a number is divisible by both 3 and 5, only 3, only 5, or neither.
    
    $number = 15;
    
    if ($number % 3 == 0 && $number % 5 == 0){
        echo "Divisible by both 3 and 5";
    }else if ($number % 5 == 0){
        echo "Divisible by 5";
    }else if ($number % 3 == 0){
        echo "Divisible by 3";
    }else {
        echo "Divisble by neither 3 nor 5";
    }
    echo "<br>";
    

    // Write a script to check whether a given year is a leap year. A year is a leap year
    // if it is divisible by 4 but not divisible by 100, except when it is divisible by 400.

    $year = 2019;
    // divisible by 400 = leap year
    // divisible by 4 but not by 100 = leap year
    if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 !== 0)) {
        echo "Yayy Leap year!!";
    } else{
        echo "Not a leap year.";
    }
    echo "<br>";

    // switch statement
    // SYNTAX
    $choice = 3;

    switch($choice){
        case 1:
            echo"You have selected first option.";
        break;
        case 2:
            echo"You have selected second option.";
        break;
        case 3:
            echo"You have selected thrid option.";
        break;
        case 4:
            echo"You have selected fourth option.";
        break;
        default:
            echo "Invalid choice!";
    }
    echo "<br>";


    /*
    Write a PHP script that assigns a grade based on a student's score:

    A for scores 90 and above
    B for scores between 80 and 89
    C for scores between 70 and 79
    D for scores between 60 and 69
    F for scores below 60
    */

    $score = 60;
 
       if($score >= 90){
            echo "Grade: A";
       }else if($score >= 80 && $score <= 89){
            echo "Grade: B";
       }else if($score >= 70 && $score <= 79){
            echo "Grade: C";
       }else if($score >= 60 && $score <= 69){
            echo "Grade: D";
       }else{
            echo "Grade: F";
       }
        echo "<br>";


    // Write a PHP script that checks if a number is within a certain range (between 10 and 20). Print a message accordingly.
    
    $num2 = 10;

    if($num2 >= 10 && $num2 <= 20){
        echo "Target is within range!";
    }else{
        echo "Target is out of range!";
    }
    echo "<br>";

    /*
    Write a PHP script that asks for a user's age and checks:

    If the age is less than 18, print "You are a minor."
    If the age is between 18 and 60, print "You are an adult."
    If the age is above 60, print "You are a senior."
    */

    $userAge = 26;

    if ($userAge < 18){
        echo "You are a minor.";
    }else if($userAge >= 18 && $userAge <= 60){
        echo "You are an adult.";
    }else{
        echo "You are a senior.";
    }
    echo "<br>"










?>
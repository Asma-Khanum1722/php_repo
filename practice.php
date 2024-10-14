<?php
    echo "<h2>OVERVIEW OF:</h2>  Classes, Objects, properties(variables), methods(functions)";
    echo "<br>";
    class Fruit{
        public $name;
        public $color;

        function __construct($name,$color){
            $this -> name = $name;
            $this -> color = $color;
        }

        function show_name(){
            return $this -> name;
        }

        function show_color(){
            return $this -> color;
        }

    }

    $apple = new Fruit('Apple', 'Red');
    
    echo $apple -> show_name();
    print_r($apple);
    echo "<br>";
    // echo $apple -> show_color();
    // echo "<br>";

?>
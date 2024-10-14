<?php
    echo "<h2> Constructors and Destructors in PHP</h2>";

    class Fruit{
        public $name;
        public $color;

        // constructor function
        // define using keyword '_ _ construct'
        function __construct($name, $color){
            $this -> name = $name;
            $this -> color = $color;
        }

        // set_value()
        // function set_value($name, $color){
        //     $this -> name = $name;
        //     $this -> color = $color;
        // }

        // show_value()
        function displayName(){
            return $this -> name;
        }

        function displayColor(){
            return $this -> color;
        }
    }

    // using constructor
    $obj1 = new Fruit('Strawberry', 'Pink');
    echo $obj1 -> displayName();
    echo "<br>";
    echo $obj1 -> displayColor();

    // making manual methods
    // $obj = new Fruit();
    // $obj -> set_value("Apple","Green");
    // echo $obj -> displayName();
    // echo "<br>";
    // echo $obj -> displayColor();
?>
<?php
    echo "<h2>OOP IN PHP</h2>";

    class Cars{
        // properties aka variables
        public $name;

        // methods aka functions
        function set_name($name){
            $this -> name = $name;
        }

        function show_name(){
           return $this -> name;
        }
    }

    // create an object using 'new' keyword
    $Ford = new Cars();

    $Ford->set_name("Lightning McQueen!");
    echo $Ford->show_name(); 

    // check wheather to which class an object belongs
    var_dump($Ford instanceof Cars)

?>
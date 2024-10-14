<?php

    $server = "sql311.infinityfree.com";
    $username = "if0_37511035";
    $password = "Baf3qcgLOSleQK";
    $dbname = "if0_37511035_termProjectInfo_db";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }

?>
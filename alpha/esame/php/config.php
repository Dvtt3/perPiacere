<?php

    $servername = "maria";
    $username = "root";
    $password = "root";
    $dbname = "mylittlejewels";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("connection failed ".$conn->connect_error );
    }

?>
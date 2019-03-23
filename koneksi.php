<?php

    $server = "localhost";
    $username = "root";
    $passwd = "";
    $db = "sakila";

    $conn = new PDO("mysql:host=$server;dbname=$db", $username, $passwd,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC)
             );

?>

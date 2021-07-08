<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "products_crud";

    try {
        $conn = new mysqli($hostname, $username, $password, $dbname);
        //echo "Database connected successfully";
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>
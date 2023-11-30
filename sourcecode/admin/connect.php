<?php
    $database_server = "localhost";
    $database_user = "root";
    $database_password = "286";
    $database_name = "BTTH01_CSE485";

    try {
        $connect = new PDO("mysql:host=$database_server;dbname=$database_name", $database_user, $database_password);
        
    } catch(PDOException $e) {
        echo "Error: ".$e->getMessage();
        $connect = null;
    }
?>

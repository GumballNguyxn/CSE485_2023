<?php 
    $host = "localhost";
    $db = "btth01_cse485";
    $user = "root";
    $pass = "";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", "$user", "$pass");
    }
    catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
?>